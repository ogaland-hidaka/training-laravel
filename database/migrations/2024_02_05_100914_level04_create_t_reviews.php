<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level04CreateTReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** level04 Step01 START */
        Schema::create('t_reviews', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false)->comment('レビューID');
            $table->unsignedBigInteger('person_id')->nullable()->comment('人物ID');
            $table->unsignedBigInteger('book_id')->nullable()->comment('本ID');
            $table->longText('review_content')->nullable()->comment('レビュー内容');
            $table->dateTime('review_date')->nullable()->comment('レビュー日');
            $table->integer('recommendation_level')->nullable()->comment('おすすめ度（星ステータス1～5まで）');
            $table->dateTime('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時');
            $table->dateTime('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
        });
        /** level04 Step01 END */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_reviews');
    }
}
