<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_TEACHER = 'teacher';
    const ROLE_GUARDIAN = 'guardian';
    const ROLE_STUDENT = 'student';
    const ROLE_ADMIN = "admin";
    const ROLE_SUPER_ADMIN = "superadmin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'roles',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function authorize($feature)
    {
        return $this->hasMany(Role::class)
                    ->where('feature', $feature)
                    ->get()
                    ->first();
    }
}
