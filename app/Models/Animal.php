<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scientific_name',
        'taxonomic_group',
        'class',
        'family',
        'species',
        'habitat',
        'protected',
        'date_of_arrival'

    ];
}
