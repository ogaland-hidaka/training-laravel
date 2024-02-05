<?php

namespace App\Services\Post;

use App\Models\TPost;
use App\Interfaces\TPostRepositoryInterface;

class PostShowService
{
    /** level02 Step09 START */
    private TPostRepositoryInterface $repository;

    public function __construct(TPostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    /** level02 Step09 END */

    /** level02 Step02 START */
    /**
     * t_posts（記事管理情報）テーブルより指定されたレコードを取得
     *
     * @param [int] $postId 記事ID
     * @return [Collection] $result 記事管理情報の全レコード
     */
    public function execShow($postId) {
        // return TPost::find(intval($postId));
        /** level02 Step09 START */
        return $this->repository->show($postId);
        /** level02 Step09 END */
    }
    /** level02 Step02 END */
}