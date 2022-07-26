<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'secret',
        'user_id',
        'expires_at',
    ];

    public static function findByKey($key = '')
    {
        return static::where('key', $key)->firstOrFail();
    }
}
