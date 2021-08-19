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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('role')->default('STU')->comment('ADM from Admin and STU for Student and TEACH for teacher');
            $table->string('address')->nullable();
            $table->json('parent_detail')->nullable();
            $table->string('current_school')->nullable();
            $table->string('previous_school')->nullable();
            $table->tinyInteger('assigndTeacher')->nullable();
            $table->string('experience')->nullable();
            $table->tinyInteger('subject_id')->nullable();
            $table->tinyInteger('status')->default('2')->comment('0 for inactive 1 active 2 for pending');
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
