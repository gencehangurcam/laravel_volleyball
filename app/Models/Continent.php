<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    use HasFactory;
}
