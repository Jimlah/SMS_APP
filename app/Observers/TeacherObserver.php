<?php

namespace App\Observers;

use Faker\Factory;
use App\Models\Role;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Str;

class TeacherObserver
{
    /**
     * Handle the Teacher "created" event.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function created(Teacher $teacher)
    {
        $user = User::create([
            'username' => $teacher->firstname . $teacher->id . "_teacher",
            'email' => $teacher->email,
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            'email_verified_at' => now(),
            'roles' => User::ROLE_TEACHER,
            'remember_token' => Str::random(10),
        ]);

        $teacher->user_id = $user->id;
        $teacher->save();

        Role::viewAllOnly($user->id, Role::FEATURE_STUDENTS);
        Role::viewSingleOnly($user->id, Role::FEATURE_TEACHERS);
    }

    /**
     * Handle the Teacher "updated" event.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function updated(Teacher $teacher)
    {
        //
    }

    /**
     * Handle the Teacher "deleted" event.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function deleted(Teacher $teacher)
    {
        //
    }

    /**
     * Handle the Teacher "restored" event.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function restored(Teacher $teacher)
    {
        //
    }

    /**
     * Handle the Teacher "force deleted" event.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return void
     */
    public function forceDeleted(Teacher $teacher)
    {
        //
    }
}
