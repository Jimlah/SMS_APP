<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsActivity extends Model
{
    use HasFactory;

    protected $table = 'activity_log';

    public function user()
    {
        return $this->belongsTo(User::class, 'causer_id');
    }

    public function feature()
    {
        return $this->belongsTo($this->subject_type, 'subject_id');
    }
}