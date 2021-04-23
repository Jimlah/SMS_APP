<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'date_of_birth',
        'state_of_origin',
        'nationality',
        'home_address'
    ];
}
