<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fakultet;

class Univerzitet extends Model
{
    use HasFactory;

    protected $fillable = [
        'grad',
        'godina_osnivanja',
    ];

    public function fakulteti()
    {
        return $this->hasMany(Fakultet::class);
    }
}
