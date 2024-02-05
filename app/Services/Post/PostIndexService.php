<?php

namespace App\Services\Post;

use App\Models\TPost;
use App\Interfaces\TPostRepositoryInterface;

class PostIndexService
{
    /** level02 Step09 START */
    private TPostRepositoryInterface $repository;

    public function __construct(TPostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    /** level02 Step09 END */

    /** level02 Step01 START */
    /**
     * t_posts（記事管理情報）テーブルより全件取得
     *
     * @return [Collection] $result 記事管理情報の全レコード
     */
    public function execIndex() {
        // 論理削除されていないレコードのみ抽出
        // return TPost::whereNull('deleted_at')->get();
        /** level02 Step09 START */
        return $this->repository->index();
        /** level02 Step09 END */
    }
    /** level02 Step01 END */
}