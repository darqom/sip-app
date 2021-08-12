<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('registration_number', 50);
            $table->foreignId('vocation_id')->constrained();
            $table->string('class', 10);
            $table->date('birth_date');
            $table->string('birth_place', 10);
            $table->string('email', 100);
            $table->string('phone', 15);
            $table->string('password');
            $table->string('photo', 100);
            $table->enum('active', ['1', '0']);
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
        Schema::dropIfExists('students');
    }
}
