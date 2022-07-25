<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function operating_unit()
    {
        return $this->belongsTo(OperatingUnit::class)
            ->withDefault(['name' => 'N/A']);
    }
}
