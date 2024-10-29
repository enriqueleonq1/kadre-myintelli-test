<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIntelliWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_intelli_widgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user_intelli');
            $table->integer('h');
            $table->integer('w');
            $table->integer('x');
            $table->integer('y');
            $table->integer('id_widget');
            $table->string('id_widget_user');

            $table->foreign('id_user_intelli')->references('id_user')->on('user_intellis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_intelli_widgets');
    }
}
