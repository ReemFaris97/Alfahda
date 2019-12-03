<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('image');
            $table->date('birth_date');
            $table->string('nationality');
            $table->string('id_card');
            $table->string('sex');
            $table->string('social_status');
            $table->string('city');
            $table->string('area');
            $table->string('twitter');
            $table->enum('qualification',['primary','meduim','secondary','faculty','qualification']);
            $table->string('Specialization');
            $table->enum('language',['arabic','english','french']);
            $table->string('job_title');
            $table->text('know_fahda');
            $table->text('why_fahda');
            $table->text('experience');
            $table->text('achievements');
            $table->enum('classes',['1','2','3']);
            $table->enum('fields',['1','2','3','4','5']);
            $table->enum('week',['middle','end']);
            $table->enum('time',['morning','evening']);
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
        Schema::dropIfExists('volunteers');
    }
}
