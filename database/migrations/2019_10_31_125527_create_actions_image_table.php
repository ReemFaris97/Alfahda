<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions_image', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedbigInteger('action_id');
            $table->foreign('action_id')->references('id')
                ->on('actions')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('image');

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
        Schema::dropIfExists('actions_image');
    }
}
