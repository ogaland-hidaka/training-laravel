<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * 【コメント管理】リポジトリクラス
 */
interface TCommentRepositoryInterface
{
    /** level03 Step01 START */
    /**
     * t_postsテーブルに紐づく対象commentsテーブルを全件取得
     *
     * @return EloquentCollection|null
     */
    public function index(int $postId);
    /** level03 Step01 END */

    /** level03 Step02 START */
    /**
     * 1件取得
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @return EloquentCollection|null
     */
    public function show(int $postId, int $commentId);
    /** level03 Step02 END */

    /** level03 Step03 START */
    /**
     * 新規登録
     *
     * @param [int] $postId 記事ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(int $postId, Request $param);
    /** level03 Step03 END */

    /** level03 Step04 START */
    /**
     * 更新
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function update(int $postId, int $commentId, Request $param);
    /** level03 Step04 END */

    /** level03 Step05 START */
    /**
     * 削除
     * - 論理削除
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @return void
     */
    public function delete(int $postId, int $commentId);
    /** level03 Step05 END */
}
