<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fakultet;

class Student extends Model
{
    use HasFactory;

    public function fakultet()
    {
        return $this->belongsTo(Fakultet::class);
    }
}
