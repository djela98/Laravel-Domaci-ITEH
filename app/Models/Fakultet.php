<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Univerzitet;
use App\Models\Student;

class Fakultet extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'univerzitet_id',
    ];

    public function univerzitet()
    {
        return $this->belongsTo(Univerzitet::class);
    }

    public function studenti()
    {
        return $this->hasMany(Student::class);
    }
}
