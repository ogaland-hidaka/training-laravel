<?php

namespace App\Http\Controllers\API;

use App\Consts\MessageConst;
use App\Http\Controllers\API\ApiController;
use App\Services\Post\PostIndexService as IndexService;
use App\Services\Post\PostShowService as ShowService;
use App\Services\Post\PostCreateService as CreateService;
use App\Services\Post\PostUpdateService as UpdateService;
use App\Services\Post\PostDeleteService as DeleteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

// Apiクラスを作成するのがlevel01 Step05の課題
class PostApi extends ApiController
{
    /** level02 Step01 START */
    /**
     * post/index API
     * 
     * @return [array] t_postsの全レコード(deleted_at = null)
     */
    public function index(IndexService $service) {
        return $service->execIndex();
    }
    /** level02 Step01 END */

    /** level02 Step02 START */
    /**
     * post/show API
     *
     * @param ShowService $service サービスクラス
     * @param [int] $postId 記事ID
     * @return [array] 指定した記事レコード
     */
    public function show(ShowService $service, int $postId) {
        return $service->execShow($postId);
    }
    /** level02 Step02 END */

    /** level02 Step03 START */
    /**
     * post/create API
     * 
     * @param CreateService $service サービスクラス
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(CreateService $service, Request $param) {
        try {
            DB::beginTransaction();
            $service->execCreate($param);
            DB::commit();
            $this->setResponse([], MessageConst::MSG_ID_000001);
        } catch (\Throwable $th) {
            DB::rollback();
            $this->setResponse([], "", MessageConst::MSG_ID_000101);
        }
    }
    /** level02 Step03 END */

    /** level02 Step04 START */
    /**
     * post/update API
     *
     * @param UpdateService $service サービスクラス
     * @param [int] $postId 記事ID
     * @param Request $param パラメータ
     * @return void
     */
    public function update(UpdateService $service, int $postId, Request $param) {
        try {
            DB::beginTransaction();
            $service->execUpdate($postId, $param);
            DB::commit();
            $this->setResponse([], MessageConst::MSG_ID_000002);
        } catch (\Throwable $th) {
            DB::rollback();
            $this->setResponse([], "", MessageConst::MSG_ID_000101);
        }
    }
    /** level02 Step04 END */

    /** level02 Step05 START */
    /**
     * post/delete API
     *
     * @param DeleteService $service サービスクラス
     * @param [int] $postId 記事ID
     * @return void
     */
    public function delete(DeleteService $service, int $postId) {
        try {
            DB::beginTransaction();
            $service->execDelete($postId);
            DB::commit();
            $this->setResponse([], MessageConst::MSG_ID_000003);
        } catch (\Throwable $th) {
            DB::rollback();
            $this->setResponse([], "", MessageConst::MSG_ID_000101);
        }
    }
    /** level02 Step05 END */
}
