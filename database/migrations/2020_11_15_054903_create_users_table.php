<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username');
            $table->string('fullname');
            $table->text('bio');
            $table->text('address');
            $table->boolean('gender');
            $table->string('phone',10);
            $table->boolean('active');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('thumbnail');
            $table->float('vote');
            $table->boolean('status');
            $table->bigInteger('follower')->unsigned();
            $table->foreign('follower')->references('id')->on('users');
            $table->bigInteger('following')->unsigned();
            $table->foreign('following')->references('id')->on('users');
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
