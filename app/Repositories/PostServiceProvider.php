<?php

namespace App\Repositories;

use Carbon\Laravel\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repositories\PostInterface',
            'App\Repositories\PostInterfaceRepository');
    }

}
