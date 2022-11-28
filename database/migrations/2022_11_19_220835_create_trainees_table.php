<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('trainee_id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('gender');
            $table->string('major');
            $table->foreignId('University_id')->references('id')->on('universities')->onDelete('cascade');
            $table->foreignId('Course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('trainees');
    }
};
