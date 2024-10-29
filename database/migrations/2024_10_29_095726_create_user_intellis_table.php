<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIntellisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_intellis', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->json('structures');
            $table->json('roles');
            $table->json('registration_stations');
            $table->json('settings_user');
            $table->json('notifications');
            $table->string('phone');
            $table->tinyInteger('status');
            $table->tinyInteger('all_permission');
            $table->tinyInteger('create_visit');
            $table->tinyInteger('login_failed');
            $table->string('ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_intellis');
    }
}
