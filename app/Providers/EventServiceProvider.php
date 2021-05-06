<?php

namespace App\Providers;

use App\Listeners\LoginSuccessful;
use App\Models\Student;
use App\Models\Teacher;
use App\Observers\StudentObserver;
use App\Observers\TeacherObserver;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Login::class => [LoginSuccessful::class]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Student::observe(StudentObserver::class);
        Teacher::observe(TeacherObserver::class);
    }
}
