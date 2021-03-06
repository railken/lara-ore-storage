<?php

namespace Railken\LaraOre\Storage\Disk;

use Illuminate\Support\ServiceProvider;

class DiskServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        Disk::observe(DiskObserver::class);
    }
}
