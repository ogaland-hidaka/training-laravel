<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level04CreateTPersons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** level04 Step01 START */
        Schema::create('t_persons', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false)->comment('人物ID');
            $table->string('name')->nullable()->comment('氏名');
            $table->string('affiliation')->nullable()->comment('所属');
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
        Schema::dropIfExists('t_persons');
    }
}
