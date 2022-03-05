<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fakultet;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'jmbg',
        'broj_indeksa',
        'fakultet_id',
        'univerzitet_id',
    ];

    public function fakultet()
    {
        return $this->belongsTo(Fakultet::class);
    }
}
