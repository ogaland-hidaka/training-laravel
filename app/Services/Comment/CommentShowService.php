<?php

namespace App\Services\Comment;

use App\Interfaces\TCommentRepositoryInterface;

class CommentShowService
{
    private TCommentRepositoryInterface $repository;

    public function __construct(TCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /** level03 Step02 START */
    /**
     * t_postsテーブルに紐づく対象commentsテーブルを1件取得
     *
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @return [Collection] $result t_postsテーブルに紐づく対象commentsテーブル1件
     */
    public function execShow($postId, $commentId) {
        return $this->repository->show($postId, $commentId);
    }
    /** level03 Step02 END */
}