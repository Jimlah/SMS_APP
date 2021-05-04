<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorities extends Model
{
    use HasFactory;

    const TEACHER = 'teacher';
    const GUARDIAN = 'guardian';
    const STUDENT = 'student';
    const ADMIN  = "admin";

    // protected $table = 'autorities';

    public $incrementing = false;
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

    public function user_authority()
    {
        return $this->belongsTo(User::class);
    }
}
