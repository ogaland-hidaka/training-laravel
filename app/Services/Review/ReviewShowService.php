<?php

namespace App\Services\Review;

use App\Interfaces\TReviewRepositoryInterface;

/** level04 Step01 START */
class ReviewShowService
{
    private TReviewRepositoryInterface $repository;

    public function __construct(TReviewRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * １冊のレビュー情報を取得
     *
     * @param [int] $bookId 本ID
     * @param [int] $reviewId レビューID
     * @return [Collection] $result １冊のレビュー情報
     */
    public function execShow($bookId, $reviewId)
    {
        return $this->repository->show($bookId, $reviewId);
    }
}
/** level04 Step01 END */
