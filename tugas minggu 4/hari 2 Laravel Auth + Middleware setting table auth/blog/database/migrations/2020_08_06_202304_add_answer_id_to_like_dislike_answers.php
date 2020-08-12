<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnswerIdToLikeDislikeAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('answer_id')->nullable();
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_answers', function (Blueprint $table) {
            $table->dropForeign(['answer_id']);
            $table->dropColumn(['answer_id']);
        });
    }
}
