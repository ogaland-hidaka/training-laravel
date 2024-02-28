<?php

namespace App\Repositories;

use App\Interfaces\TReviewRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TReview;

/**
 * 【レビュー情報管理】リポジトリクラス
 */
class TReviewRepository implements TReviewRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * １冊の本のレビュー情報を登録
     *
     * @param [int] $bookId 本ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create($bookId, Request $param): void
    {
        try {
            $t_review = new TReview();
            $t_review->fill($param->toArray());
            $t_review->book_id = $bookId;
            $t_review->created_at = now();
            $t_review->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    /**
     * １冊のレビュー情報を取得
     *
     * @param [int] $bookId 本ID
     * @param [int] $reviewId レビューID
     * @return [array] $result １冊のレビュー情報
     */
    public function show($bookId, $reviewId)
    {
        return TReview::find(intval($reviewId));
    }

    /** level04 Step01 END */
}
