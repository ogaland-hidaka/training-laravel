<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * 【レンタル情報管理】リポジトリクラス
 */
interface TRentalRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * １冊の本のレンタル情報を登録を登録
     *
     * @param [int] $bookId 本ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(int $bookId, Request $param);

    /**
     * １冊のレンタル情報を取得
     *
     * @param [int] $bookId 本ID
     * @param [int] $rentalId レンタルID
     * @return EloquentCollection|null
     */
    public function show(int $bookId, int $rentalId);

    /** level04 Step01 END */
}
