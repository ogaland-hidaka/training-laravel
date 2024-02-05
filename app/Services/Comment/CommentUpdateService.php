<?php

namespace App\Services\Comment;

use App\Interfaces\TCommentRepositoryInterface;

class CommentUpdateService
{
    private TCommentRepositoryInterface $repository;

    public function __construct(TCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /** level03 Step04 START */
    /**
     * t_postsテーブルに紐づくコメントを1件登録
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @param [Request] $param パラメータ
     * @return [Collection] $result t_postsテーブルに紐づく対象commentsテーブル1件
     */
    public function execUpdate($postId, $commentId, $param) {
        return $this->repository->update($postId, $commentId, $param);
    }
    /** level03 Step04 END */
}