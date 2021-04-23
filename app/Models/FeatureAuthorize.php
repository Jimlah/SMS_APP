<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureAuthorize extends Model
{
    use HasFactory;

    const TEACHER = 'teacher';
    const GUARDIAN = 'guardian';
    const STUDENT = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'feature',
        'viewAny',
        'view',
        'create',
        'update',
        'delete'
    ];
}
