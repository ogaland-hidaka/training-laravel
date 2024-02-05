<?php

namespace App\Services\Comment;

use App\Interfaces\TCommentRepositoryInterface;

class CommentDeleteService
{
    private TCommentRepositoryInterface $repository;

    public function __construct(TCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /** level03 Step05 START */
    /**
     * t_postsテーブルに紐づくコメントを1件削除
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @param [Request] $param パラメータ
     * @return [Collection] $result t_postsテーブルに紐づく対象commentsテーブル1件
     */
    public function execDelete($postId, $commentId) {
        return $this->repository->delete($postId, $commentId);
    }
    /** level03 Step05 END */
}