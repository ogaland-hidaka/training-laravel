<?php

namespace App\Services\Post;

use App\Models\TPost;
use App\Http\Controllers\API\ApiController;
use Illuminate\Support\Facades\DB;
use App\Interfaces\TPostRepositoryInterface;

class PostCreateService
{
    /** level02 Step09 START */
    private TPostRepositoryInterface $repository;

    public function __construct(TPostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    /** level02 Step09 END */

    /** level02 Step03 START */
    /**
     * t_posts（記事管理情報）テーブルに新規レコード登録
     *
     * @var [Request] $param
     * @return void
     */
    public function execCreate($param) {
        // try {
        //     $t_post = new TPost();
        //     $t_post->post_user_id = $param['post_user_id'];
        //     $t_post->title = $param['title'];
        //     $t_post->body = $param['body'];
        //     $t_post->created_at = now();
        //     $t_post->save();
        // } catch (\Throwable $ex) {
        //     DB::rollBack();
        //     throw $ex;
        // }
        /** level02 Step09 START */
        return $this->repository->create($param);
        /** level02 Step09 END */
    }
    /** level02 Step03 END */
}