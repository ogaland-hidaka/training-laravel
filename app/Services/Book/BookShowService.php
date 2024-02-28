<?php

namespace App\Services\Book;

use App\Interfaces\TBookRepositoryInterface;

/** level04 Step01 START */
class BookShowService
{
    private TBookRepositoryInterface $repository;

    public function __construct(TBookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * １冊の本の情報を取得
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function execShow($bookId)
    {
        return $this->repository->show($bookId);
    }
}
/** level04 Step01 END */
