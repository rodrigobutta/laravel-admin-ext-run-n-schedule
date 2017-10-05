<?php

namespace RodrigoButta\Admin\RunSchedule;

use Illuminate\Support\ServiceProvider;

class RunScheduleServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-admin-ext-run-n-schedule');

        RunSchedule::boot();
    }
}
