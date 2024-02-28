<?php

namespace App\Services\Rental;

use App\Interfaces\TRentalRepositoryInterface;

/** level04 Step01 START */
class RentalCreateService
{
    private TRentalRepositoryInterface $repository;

    public function __construct(TRentalRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * １冊の本のレンタル情報を登録
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function execCreate($bookId, $param)
    {
        return $this->repository->create($bookId, $param);
    }
}
/** level04 Step01 END */
