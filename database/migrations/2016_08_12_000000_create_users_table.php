<?php

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
            $table->string('name',100);
            $table->string('last_name',100);
            $table->string('email')->unique();
            $table->string('user',50)->unique();
            $table->string('password', 60);
            $table->enum('type', ['user' , 'admin']);
            $table->boolean('active');
            $table->string('state',100);
            $table->string('city',100);
            $table->string('cp',5);
            $table->text('address');
            $table->string('homephone',12);
            $table->string('workphone',12);
            $table->string('mobilephone',12);
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
