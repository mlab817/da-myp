<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginKey;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginViaSecretController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $key = $request->get('key');
        $secret = $request->get('secret');

        Log::info(json_encode($secret));

        if ($loginKey = LoginKey::where('key', $key)->where('secret', $secret)->first()) {
            Auth::loginUsingId($loginKey->user_id);

            return redirect()->route(RouteServiceProvider::HOME);
        }

        return back();
    }
}
