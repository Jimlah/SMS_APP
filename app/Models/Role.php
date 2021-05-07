<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, LogsActivity;

    const FEATURE_ROLES = Self::class;
    const FEATURE_USERS = User::class;
    const FEATURE_TEACHERS = Teacher::class;
    const FEATURE_STUDENTS = Student::class;
    const FEATURE_GUARDIANS = Guardian::class;

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

    /**
     * user_roles
     * return the authorizations of users on each features
     *
     * @return void
     */
    public function user_roles()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * viewAllOnly
     * able to view all data only
     *
     * @param  mixed $user_id the user id
     * @param  mixed $feature the feature name
     * @return void
     */
    public static function viewAllOnly($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => true,
            'view' => true,
            'create' => false,
            'update' => false,
            'delete' => false
        ]);

        return $result;
    }

    /**
     * viewSingleOnly
     * able to view a single file only
     *
     * @param  mixed $user_id the user id
     * @param  mixed $feature the feature name
     * @return void
     */
    public static function viewSingleOnly($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => false,
            'view' => true,
            'create' => false,
            'update' => false,
            'delete' => false
        ]);

        return $result;
    }

    /**
     * viewAllAndCreate
     * able to view all and perform all CRUD operations except delete
     *
     * @param  mixed $user_id the user id
     * @param  mixed $feature the feature name
     * @return void
     */
    public static function viewAllAndCreate($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => true,
            'view' => true,
            'create' => true,
            'update' => true,
            'delete' => false,
        ]);

        return $result;
    }

    /**
     * viewOnlyCreate
     * able to view a single file and perform CRUD operations except delete on that file
     *
     * @param  mixed $user_id
     * @param  mixed $feature
     * @return void
     */
    public static function viewOnlyCreate($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => false,
            'view' => true,
            'create' => true,
            'update' => true,
            'delete' => false
        ]);

        return $result;
    }

    /**
     * viewAllAndDelete
     * Able to view all and perform all CRUD operations
     *
     * @param  mixed $user_id
     * @param  mixed $feature
     * @return void
     */
    public static function viewAllAndDelete($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => true,
            'view' => true,
            'create' => true,
            'update' => true,
            'delete' => true
        ]);

        return $result;
    }

    /**
     * viewOnlyAndDelete
     * able to view a single data and perform crud operations on it
     *
     * @param  mixed $user_id
     * @param  mixed $feature
     * @return void
     */
    public static function viewOnlyAndDelete($user_id, $feature)
    {
        $result = self::create([
            'user_id' => $user_id,
            'feature' => $feature,
            'viewAny' => false,
            'view' => true,
            'create' => true,
            'update' => true,
            'delete' => true
        ]);

        return $result;
    }
}
