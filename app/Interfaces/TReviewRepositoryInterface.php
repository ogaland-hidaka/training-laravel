<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * 【レビュー情報管理】リポジトリクラス
 */
interface TReviewRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * １冊の本のレビュー情報を登録
     *
     * @param [int] $bookId 本ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(int $bookId, Request $param);

    /**
     * １冊のレビュー情報を参照
     *
     * @param [int] $bookId 本ID
     * @param [int] $reviewId レビューID
     * @return EloquentCollection|null
     */
    public function show(int $bookId, int $reviewId);

    /** level04 Step01 END */
}
