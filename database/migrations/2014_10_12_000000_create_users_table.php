<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName')->nullable(true);
            $table->string('familyName')->nullable(true);
            $table->string('projectName')->nullable(true);
            $table->string('projectURL')->nullable(true);
            $table->string('hash')->nullable(true);
            $table->string('secret')->nullable(true);
            $table->string('email')->unique();
            $table->string('password')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
