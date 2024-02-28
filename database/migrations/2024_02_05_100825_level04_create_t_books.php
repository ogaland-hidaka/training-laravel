<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level04CreateTBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** level04 Step01 START */
        Schema::create('t_books', function (Blueprint $table) {
            // 各項目設定
            $table->bigIncrements('id')->nullable(false)->comment('本ID');
            $table->string('title')->nullable()->comment('書籍名');
            $table->string('author')->nullable()->comment('作者');
            $table->dateTime('purchase_date')->nullable()->comment('購入日');
            $table->unsignedBigInteger('person_id')->nullable()->comment('購入者ID');
            $table->integer('estimated_reading_time')->nullable()->comment('読破目安時間（分）');
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
        Schema::dropIfExists('t_books');
    }
}
