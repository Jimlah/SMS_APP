<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsActivity extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'activity_log';

    protected static $logAttributes = [
        'user_id',
        'firstname',
        'lastname',
        'middlename',
        'email',
        'date_of_birth',
        'phone_number'
    ];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    public function getDescriptionForEvent(string $eventname)
    {
        return "You have {$eventname} a student";
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'causer_id');
    }

    public function feature()
    {
        return $this->belongsTo($this->subject_type, 'subject_id');
    }
}
