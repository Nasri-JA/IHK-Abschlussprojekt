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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('personal_number')->unique();
            $table->string('avatar_path', 2048)->nullable();
            $table->string('first_name');
            $table->string('family_name');
            $table->string('birth_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('country_of_birth_id')->nullable()->constrained('countries');
            $table->foreignId('gender_id')->nullable()->constrained();
            $table->string('nationality_id')->nullable()->constrained('nationalities');
            $table->string('mobile')->nullable();
            $table->string('tel')->nullable();
            $table->string('email_private')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country_id')->nullable()->constrained('countries');
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
        Schema::dropIfExists('staff');
    }
};
