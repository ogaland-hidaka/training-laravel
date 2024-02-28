<?php

namespace App\Services\Book;

use App\Interfaces\TBookRepositoryInterface;

/** level04 Step01 START */
class BookIndexService
{
    private TBookRepositoryInterface $repository;

    public function __construct(TBookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * 購入した全ての本の情報を取得
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function execIndex()
    {
        return $this->repository->index();
    }
}
/** level04 Step01 END */
