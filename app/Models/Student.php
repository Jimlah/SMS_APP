<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'middlename',
        'email',
        'date_of_birth',
        'state_of_origin',
        'nationality',
        'home_address'
    ];

    protected static $logAttributes = [
        'user_id',
        'firstname',
        'lastname',
        'middlename',
        'email',
        'date_of_birth',
        'state_of_origin',
        'nationality',
        'home_address'
    ];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    public function getDescriptionForEvent(string $eventname)
    {
        return "You have {$eventname} a student";
    }
}
