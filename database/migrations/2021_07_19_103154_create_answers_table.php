<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('question_id')
                    ->references('id')->on('questions')
                    ->onDelete('cascade');
            $table->string('answer_name');
            $table->tinyInteger('is_answer')->comment('1 for right-answer 0 for wrong-answer')->default(0);
            $table->tinyInteger('status')->comment('1 for active 0 for inactive')->default(1);
            $table->bigInteger('created_by')->default('0')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
