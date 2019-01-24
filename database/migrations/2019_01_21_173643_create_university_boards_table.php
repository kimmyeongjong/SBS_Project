<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('university_id');
            $table->enum('subject', ['search_stuff', 'search_roommate','pass_room','study_group']);
            $table->string('title');
            $table->text('contents');
            $table->integer('comment_id');
            $table->integer('user_level');
            $table->date('start_day');
            $table->date('end_day');
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
        Schema::dropIfExists('university_boards');
    }
}
