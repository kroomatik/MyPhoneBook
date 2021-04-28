<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'phone',
        'email',
        'town',
        'zipcode',
        'updated_at',
        'created_at',
    ];
}
