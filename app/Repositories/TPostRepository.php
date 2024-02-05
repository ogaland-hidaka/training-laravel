<?php

namespace App\Repositories;

use App\Interfaces\TPostRepositoryInterface;
use App\Models\TPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 【記事管理】リポジトリクラス
 */
class TPostRepository implements TPostRepositoryInterface
{
    /** level02 Step07 START */
    /**
     * t_posts（記事管理情報）テーブルより全件取得
     */
    public function index()
    {
        // 論理削除されていないレコードのみ抽出
        return TPost::whereNull('deleted_at')->get();
    }

    /**
     * t_posts（記事管理情報）テーブルより指定されたレコードを取得
     *
     * @param [int] $postId 記事ID
     * @return [Collection] $result 指定記事IDの記事管理情報
     */
    public function show($postId)
    {
        return TPost::find(intval($postId));
    }

    /**
     * t_posts（記事管理情報）テーブルに新規レコード登録
     *
     * @var [Request] $param
     * @return void
     */
    public function create(Request $param): void
    {
        try {
            $t_post = new TPost();
            $t_post->fill($param->toArray());
            $t_post->created_at = now();
            $t_post->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    /**
     * t_posts（記事管理情報）テーブルに対象レコード更新
     * 
     * @param [int] $postId 記事ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function update(int $postId, Request $param): void
    {
        try {
            $t_post = TPost::find(intval($postId));
            $t_post->fill($param->toArray());
            $t_post->updated_at = now();
            $t_post->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    /**
     * t_posts（記事管理情報）テーブルより対象レコード削除
     * 
     * @param [int] $postId 記事ID
     * @return void
     */
    public function delete($postId)
    {
        TPost::find(intval($postId))->delete();
    }
    /** level02 Step07 END */
}
