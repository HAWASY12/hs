<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;
    protected $table = 'lignes';

    protected $fillable = [
        'depart',
        'destination',
        'heure',
        'prix'
    ];
}
