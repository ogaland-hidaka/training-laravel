<?php

namespace App\Services\Post;

use App\Models\TPost;
use App\Http\Controllers\API\ApiController;
use Illuminate\Support\Facades\DB;
use App\Interfaces\TPostRepositoryInterface;

class PostDeleteService
{
    /** level02 Step09 START */
    private TPostRepositoryInterface $repository;

    public function __construct(TPostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    /** level02 Step09 END */

    /** level02 Step05 START */
    /**
     * t_posts（記事管理情報）テーブルより対象レコード削除
     * 
     * @param [int] $postId 記事ID
     * @return void
     */
    public function execDelete($postId) {
        // try {
        //     TPost::find(intval($postId))->delete();
        // } catch (\Throwable $ex) {
        //     DB::rollBack();
        //     throw $ex;
        // }
        /** level02 Step09 START */
        return $this->repository->delete($postId);
        /** level02 Step09 END */
    }
    /** level02 Step05 END */
}