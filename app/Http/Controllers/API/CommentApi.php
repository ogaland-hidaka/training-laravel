<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Comment\CommentIndexService as IndexService;
use App\Services\Comment\CommentShowService as ShowService;
use App\Services\Comment\CommentCreateService as CreateService;
use App\Services\Comment\CommentUpdateService as UpdateService;
use App\Services\Comment\CommentDeleteService as DeleteService;

// Apiクラスを作成するのがStep05の課題
class CommentApi extends Controller
{
    /** level03 Step01 START */
    /**
     * comment/index API
     * 
     * @param [IndexService] $service indexサービスクラス
     * @param [int] $postId 記事ID
     * @return [array] t_postsテーブルに紐づく対象commentsテーブルを全件取得(deleted_at = null)
     */
    public function index(IndexService $service, int $postId)
    {
        return $service->execIndex($postId);
    }
    /** level03 Step01 END */

    /** level03 Step02 START */
    /**
     * comment/show API
     *
     * @param [ShowService] $service showサービスクラス
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @return [array] t_postsテーブルに紐づく対象commentsテーブルを1件取得(deleted_at = null)
     */
    public function show(ShowService $service, int $postId, int $commentId)
    {
        return $service->execShow($postId, $commentId);
    }
    /** level03 Step02 END */

    /** level03 Step03 START */
    /**
     * comment/create API
     *
     * @param [CreateService] $service createサービスクラス
     * @param [int] $postId 記事ID
     * @param [Request] $request リクエスト
     * @return [array] t_postsテーブルに紐づくコメントを1件登録
     */
    public function create(CreateService $service, int $postId, Request $request)
    {
        return $service->execCreate($postId, $request);
    }
    /** level03 Step03 END */

    /** level03 Step04 START */
    /**
     * comment/update API
     *
     * @param [UpdateService] $service updateサービスクラス
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @param [Request] $request リクエスト
     * @return [array] t_postsテーブルに紐づくコメントを1件更新
     */
    public function update(UpdateService $service, int $postId, int $commentId, Request $request)
    {
        return $service->execUpdate($postId, $commentId, $request);
    }
    /** level03 Step04 END */

    /** level03 Step05 START */
    /**
     * comment/delete API
     *
     * @param [DeleteService] $service deleteサービスクラス
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @return [array] t_postsテーブルに紐づくコメントを1件削除
     */
    public function delete(DeleteService $service, int $postId, int $commentId)
    {
        return $service->execDelete($postId, $commentId);
    }
    /** level03 Step05 END */
}
