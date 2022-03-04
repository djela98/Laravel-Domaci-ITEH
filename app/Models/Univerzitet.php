<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fakultet;

class Univerzitet extends Model
{
    use HasFactory;

    public function fakulteti()
    {
        return $this->hasMany(Fakultet::class);
    }
}
