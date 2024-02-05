<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level01CreateTComments extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        /** level01 Step01 START */
        // t_comments(記事コメント管理)テーブルの作成
        // Schema::create('t_comments', function (Blueprint $table) {
        //     // 各項目設定
        //     $table->bigIncrements('id')->nullable(false)->comment('コメントID');
        //     $table->unsignedBigInteger('post_id')->comment('記事ID');
        //     $table->unsignedBigInteger('comment_user_id')->comment('コメントしたユーザーID');
        //     $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
        //     $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新日時');
        //     $table->timestamp('deleted_at')->nullable()->comment('削除日時');
        // });
        /** level01 Step01 END */

        /** level01 Step02 START */
        Schema::create('t_comments', function (Blueprint $table) {
            // 各項目設定
            $table->bigIncrements('id')->nullable(false)->comment('コメントID');
            $table->unsignedBigInteger('post_id')->comment('記事ID');
            $table->unsignedBigInteger('comment_user_id')->comment('コメントしたユーザーID');
            $table->longText('comment')->nullable(false)->comment('コメント'); // カラム「comment」を追加
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
        });
        /** level01 Step02 END */
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_comments');
    }
}
