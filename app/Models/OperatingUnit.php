<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingUnit extends Model
{
    use HasFactory;

    public function prexcs()
    {
        return $this->belongsToMany(Prexc::class, 'ou_prexc');
    }
}
