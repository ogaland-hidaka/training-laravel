<?php

namespace App\Services\Review;

use App\Interfaces\TReviewRepositoryInterface;

/** level04 Step01 START */
class ReviewCreateService
{
    private TReviewRepositoryInterface $repository;

    public function __construct(TReviewRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * １冊の本のレビュー情報を登録
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
