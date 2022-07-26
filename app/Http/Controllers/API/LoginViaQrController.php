<?php

namespace App\Http\Controllers\API;

use App\Events\QrLoginAuthorizedEvent;
use App\Http\Controllers\Controller;
use App\Models\LoginKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LoginViaQrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Generate a secret key for login-key
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $key = $request->key;

        $secret = Str::random(32);

        $loginKey = LoginKey::findByKey($key);

        $loginKey->secret = $secret;
        $loginKey->user_id = $request->user('api')->id; // get user id
        $loginKey->save();

        event(new QrLoginAuthorizedEvent($key['loginKey'], $secret));

        return response()->json([
            'secret' => $secret,
        ]);
    }
}
