<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Guardian;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, LogsActivity;

    const ROLE_TEACHER = Teacher::class;
    const ROLE_GUARDIAN = Guardian::class;
    const ROLE_STUDENT = Student::class;
    const ROLE_ADMIN = Admin::class;

    protected static $logAttributes = ['username', 'email', 'roles'];

    protected static $ignoreChangedAttributes = ['password', 'updated_at'];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated', 'deleted'];

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
                    ->where('feature', $feature);
    }

    public function getDescriptionForEvent(string $eventname)
    {
        return "You have {$eventname} a user";
    }

    /**
     * Get the profile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne($this->roles);
    }
}
