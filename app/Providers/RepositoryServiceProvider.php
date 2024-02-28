<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\TPostRepositoryInterface;
use App\Repositories\TPostRepository;
use App\Interfaces\TCommentRepositoryInterface;
use App\Repositories\TCommentRepository;
use App\Interfaces\TBookRepositoryInterface;
use App\Repositories\TBookRepository;
use App\Interfaces\TRentalRepositoryInterface;
use App\Repositories\TRentalRepository;
use App\Interfaces\TReviewRepositoryInterface;
use App\Repositories\TReviewRepository;

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
        $this->app->bind(TBookRepositoryInterface::class, TBookRepository::class);
        $this->app->bind(TRentalRepositoryInterface::class, TRentalRepository::class);
        $this->app->bind(TReviewRepositoryInterface::class, TReviewRepository::class);
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
