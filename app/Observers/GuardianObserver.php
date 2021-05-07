<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;
use App\Models\Guardian;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class GuardianObserver
{
    /**
     * Handle the Guardian "created" event.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return void
     */
    public function created(Guardian $guardian)
    {
        $user = User::create([
            'username' => $guardian->firstname . $guardian->id . "_guardian",
            'email' => $guardian->email,
            'password' => env('USER_PASSWORD', Hash::make(Str::random(8))),
            'email_verified_at' => now(),
            'roles' => User::ROLE_GUARDIAN,
            'remember_token' => Str::random(10),
        ]);
       
        $guardian->user_id = $user->id;
        $guardian->save();

        Role::viewSingleOnly($user->id, Role::FEATURE_STUDENTS);
        Role::viewSingleOnly($user->id, Role::FEATURE_TEACHERS);
    }

    /**
     * Handle the Guardian "updated" event.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return void
     */
    public function updated(Guardian $guardian)
    {
        //
    }

    /**
     * Handle the Guardian "deleted" event.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return void
     */
    public function deleted(Guardian $guardian)
    {
        //
    }

    /**
     * Handle the Guardian "restored" event.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return void
     */
    public function restored(Guardian $guardian)
    {
        //
    }

    /**
     * Handle the Guardian "force deleted" event.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return void
     */
    public function forceDeleted(Guardian $guardian)
    {
        //
    }
}
