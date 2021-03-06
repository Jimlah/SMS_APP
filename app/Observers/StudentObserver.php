<?php

namespace App\Observers;

use Faker\Factory;
use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentObserver
{
    /**
     * Handle the Student "created" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function created(Student $student)
    {
        $user = User::create([
            'username' => $student->firstname . $student->id . "_student", 
            'email' => $student->email,
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            'email_verified_at' => now(),
            'roles' => User::ROLE_STUDENT,
            'remember_token' => Str::random(10),
        ]);
       
        $student->user_id = $user->id;
        $student->save();

        Role::viewOnlyCreate($user->id, Role::FEATURE_STUDENTS);
        Role::viewSingleOnly($user->id, Role::FEATURE_TEACHERS);

    }

    /**
     * Handle the Student "updated" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        //
    }

    /**
     * Handle the Student "restored" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
