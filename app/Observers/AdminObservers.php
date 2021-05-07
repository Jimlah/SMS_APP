<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;

class AdminObservers
{
    /**
     * Handle the Admin "created" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function created(Admin $admin)
    {
        $user = User::create([
            'username' => $admin->firstname . $admin->id,
            'email' => $admin->email,
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            'email_verified_at' => now(),
            'roles' => User::ROLE_ADMIN,
            'remember_token' => Str::random(10),
        ]);
       
        $admin->user_id = $user->id;
        $admin->save();

        Role::viewAllAndDelete($user->id, Role::FEATURE_STUDENTS);
        Role::viewAllAndDelete($user->id, Role::FEATURE_TEACHERS);
    }

    /**
     * Handle the Admin "updated" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function updated(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "deleted" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function deleted(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "restored" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function restored(Admin $admin)
    {
        //
    }

    /**
     * Handle the Admin "force deleted" event.
     *
     * @param  \App\Models\Admin  $admin
     * @return void
     */
    public function forceDeleted(Admin $admin)
    {
        //
    }
}
