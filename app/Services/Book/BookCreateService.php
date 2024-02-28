<?php

namespace App\Services\Book;

use App\Interfaces\TBookRepositoryInterface;

/** level04 Step01 START */
class BookCreateService
{
    private TBookRepositoryInterface $repository;

    public function __construct(TBookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * 購入した本の情報を登録
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function execCreate($param)
    {
        return $this->repository->create($param);
    }
}
/** level04 Step01 END */
