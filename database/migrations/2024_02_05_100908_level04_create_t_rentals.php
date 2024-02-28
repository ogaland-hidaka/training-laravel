<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level04CreateTRentals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** level04 Step01 START */
        Schema::create('t_rentals', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false)->comment('レンタルID');
            $table->unsignedBigInteger('person_id')->nullable()->comment('人物ID');
            $table->unsignedBigInteger('book_id')->nullable()->comment('本ID');
            $table->dateTime('start_date')->nullable()->comment('借りる期間（開始日）');
            $table->dateTime('end_date')->nullable()->comment('借りる期間（終了日）');
            $table->integer('status')->nullable()->comment('貸出中・返却ステータス');
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
        Schema::dropIfExists('t_rentals');
    }
}
