<?php

namespace App\Services\Rental;

use App\Interfaces\TRentalRepositoryInterface;

/** level04 Step01 START */
class RentalShowService
{
    private TRentalRepositoryInterface $repository;

    public function __construct(TRentalRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * １冊のレンタル情報を取得
     *
     * @param [int] $bookId 本ID
     * @param [int] $rentalId レンタルID
     * @return [Collection] $result １冊のレンタル情報
     */
    public function execShow($bookId, $rentalId)
    {
        return $this->repository->show($bookId, $rentalId);
    }
}
/** level04 Step01 END */
