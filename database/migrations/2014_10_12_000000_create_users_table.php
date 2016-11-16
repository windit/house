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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->tinyInteger('level');
            $table->string('gender', 10);
            $table->timestamp('birthday');
            $table->integer('district_id');
            $table->integer('ward_id')->nullable();
            $table->integer('street_id')->nullable();
            $table->string('address')->nullable();
            $table->string('landline', 15)->nullable();
            $table->string('cellphone', 15)->nullable();
            $table->string('skype')->nullable();    
            $table->string('avatar')->nullable();
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
        Schema::drop('users');
    }
}
