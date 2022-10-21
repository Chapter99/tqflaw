<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTqfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tqfs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id',128);
            $table->text('teacher_name');
            $table->string('major_id');
            $table->integer('level');
            $table->integer('term');
            $table->integer('nyear');             
            $table->string('link_tqf3',128);
            $table->string('link_tqf4',128);
            $table->string('link_tqf5',128);
            $table->integer('status');
            $table->string('mana_id',128);
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
        Schema::dropIfExists('tqfs');
    }
}
