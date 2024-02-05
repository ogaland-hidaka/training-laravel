<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\TPostRepositoryInterface;
use App\Repositories\TPostRepository;
use App\Interfaces\TCommentRepositoryInterface;
use App\Repositories\TCommentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /** level02 Step08 START */
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TPostRepositoryInterface::class, TPostRepository::class);
        $this->app->bind(TCommentRepositoryInterface::class, TCommentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /** level02 Step08 END */
}