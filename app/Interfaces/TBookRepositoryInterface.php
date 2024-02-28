<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * 【本情報管理】リポジトリクラス
 */
interface TBookRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * 購入した本の情報を登録
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(Request $param);

    /**
     * 購入した全ての本の情報を全件取得
     *
     * @return EloquentCollection|null
     */
    public function index();

    /**
     * １冊の本の情報を取得
     *
     * @param [int] $bookId 本ID
     * @return EloquentCollection|null
     */
    public function show(int $bookId);

    /** level04 Step01 END */
}
