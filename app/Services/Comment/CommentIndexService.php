<?php

namespace App\Services\Comment;

use App\Interfaces\TCommentRepositoryInterface;

class CommentIndexService
{
    private TCommentRepositoryInterface $repository;

    public function __construct(TCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /** level03 Step01 START */
    /**
     * t_postsテーブルに紐づく対象commentsテーブルを全件取得
     *
     * @return [Collection] $result t_postsテーブルに紐づく対象commentsテーブルの全レコード
     */
    public function execIndex($postId)
    {
        return $this->repository->index($postId);
    }
    /** level03 Step01 END */
}
