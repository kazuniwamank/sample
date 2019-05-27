<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXxxQuestionsTble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xxx_questions', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('title');
            $table->string('question');
            $table->date('start_date')->useCurrent()->comment('設問、画面表示開始日時');
            $table->date('end_date')->comment('設問、画面表示開始日時');
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
        Schema::dropIfExists('xxx_questions');
    }
}
