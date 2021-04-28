<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'civility',
        'lastName',
        'firstName',
        'street',
        'zipcode',
        'town',
        'phone',
        'email',
        'entreprise',
    ];
}
