<?php

namespace App\Repositories;

use App\Interfaces\TCommentRepositoryInterface;
use App\Models\TPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TComment;

/**
 * 【記事管理】リポジトリクラス
 */
class TCommentRepository implements TCommentRepositoryInterface
{
    /** level03 Step01 START */
    /**
     * t_postsテーブルに紐づく対象commentsテーブルを全件取得
     * 
     * @param [int] $postId 記事ID
     * @return [Collection] $result 指定記事IDの記事管理情報
     */
    public function index($postId)
    {
        $comments = TPost::with('comments')->where('id', $postId)->get(['id', 'post_user_id', 'title', 'body']);
        return $comments->toArray();
    }
    /** level03 Step01 END */

    /** level03 Step02 START */
    /**
     * t_postsテーブルに紐づく対象commentsテーブルを1件取得
     *
     * @param [int] $postId 記事ID
     * @return [Collection] $result 指定記事IDの記事管理情報
     */
    public function show($postId, $commentId)
    {
        $comments = TPost::with(['comments' => function ($query) use ($postId, $commentId) {
            $query->where('id', '=', $commentId);
        }])->where('id', '=', $postId)->get(['id', 'post_user_id', 'title', 'body']);
        return $comments->toArray();
    }
    /** level03 Step02 END */

    /** level03 Step03 START */
    /**
     * t_postsテーブルに紐づくコメントを1件登録
     *
     * @param [int] $postId 記事ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create($postId, Request $param): void
    {
        try {
            $t_comment = new TComment();
            $t_comment->fill($param->toArray());
            $t_comment->post_id = $postId;
            $t_comment->created_at = now();
            $t_comment->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }
    /** level03 Step03 END */

    /** level03 Step04 START */
    /**
     * t_postsテーブルに紐づくコメントを1件更新
     * 
     * @param [int] $postId 記事ID
     * @param [int] $commentId コメントID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function update(int $postId, int $commentId, Request $param): void
    {
        try {
            $t_comment = TComment::find(intval($commentId));
            $t_comment->fill($param->toArray());
            $t_comment->post_id = $postId;
            $t_comment->updated_at = now();
            $t_comment->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }
    /** level03 Step04 END */

    /** level03 Step05 START */
    /**
     * t_postsテーブルに紐づくコメントを1件削除
     * 
     * @param [int] $postId 記事ID
     * @return void
     */
    public function delete(int $postId, int $commentId)
    {
        // $postIdは削除条件で使用しないので必要なのか、確認がしたい
        TComment::find(intval($commentId))->delete();
    }
    /** level03 Step05 END */
}
