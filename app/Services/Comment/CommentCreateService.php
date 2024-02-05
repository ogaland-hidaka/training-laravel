<?php

namespace App\Services\Comment;

use App\Interfaces\TCommentRepositoryInterface;

class CommentCreateService
{
    private TCommentRepositoryInterface $repository;

    public function __construct(TCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /** level03 Step03 START */
    /**
     * t_postsテーブルに紐づくコメントを1件登録
     *
     * @param [int] $postId 記事ID
     * @param [Request] $param パラメータ
     * @return [Collection] $result t_postsテーブルに紐づく対象commentsテーブル1件
     */
    public function execCreate($postId, $param) {
        return $this->repository->create($postId, $param);
    }
    /** level03 Step03 END */
}