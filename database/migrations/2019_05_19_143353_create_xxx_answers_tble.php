<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXxxAnswersTble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxx_answers', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name')->comment('回答者氏名');
            $table->bigInteger('qid');
            $table->string('answer_value');
            $table->string('comment')->default('')->comment('コメント');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xxx_answers');
    }
}
