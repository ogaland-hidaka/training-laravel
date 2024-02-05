<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level01CreateTPosts extends Migration
{
    /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        /** level01 Step01 START */
        // 　t_posts(記事管理)テーブルの作成
        Schema::create('t_posts', function (Blueprint $table) {
            // 各項目設定
            $table->bigIncrements('id')->nullable(false)->comment('記事ID');
            $table->unsignedBigInteger('post_user_id')->comment('ユーザーID');
            $table->string('title')->nullable(false)->comment('タイトル');
            $table->longText('body')->nullable()->comment('内容');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
        });
        /** level01 Step01 END */
    }

    /**
     * マイグレーションを戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_posts');
    }
}
