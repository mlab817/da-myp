<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    public function encodes()
    {
        return $this->belongsToMany(Prexc::class, 'prexc_encoder');
    }
}
