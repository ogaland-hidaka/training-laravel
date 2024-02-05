<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * 【記事管理】リポジトリクラス
 */
interface TPostRepositoryInterface
{
    /** level02 Step06 START */
    /**
     * 全件取得
     *
     * @return EloquentCollection|null
     */
    public function index();

    /**
     * 1件取得
     *
     * @param [int] $postId 記事ID
     * @return EloquentCollection|null
     */
    public function show(int $postId);

    /**
     * 新規登録
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(Request $param);

    /**
     * 更新
     *
     * @param [int] $postId 記事ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function update(int $postId, Request $param);

    /**
     * 削除
     * - 論理削除
     *
     * @param [int] $postId 記事ID
     * @return void
     */
    public function delete(int $postId);
    /** level02 Step06 END */
}
