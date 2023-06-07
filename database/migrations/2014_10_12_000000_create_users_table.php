<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            //info
            $table->id();
            $table->string('avatar_path');
            $table->string('full_name');
            $table->date('birth_day');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('activity');

            //for-club
            $table->string('started_work');
            $table->string('experience');
            $table->string('about_me');
            $table->string('hobby');
            $table->string('favorite_places');
            $table->string('facebook');
            $table->string('vk');
            $table->string('instagram');

            //settings
            $table->date('duty');
            $table->string('phone')->unique();
            $table->string('login_oktell')->unique();
            $table->string('login_password');
            $table->boolean('notify');
            $table->boolean('distribution_results');
            $table->boolean('accept_leads');
            $table->boolean('accept_calls');
            $table->boolean('compulsory_education');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
