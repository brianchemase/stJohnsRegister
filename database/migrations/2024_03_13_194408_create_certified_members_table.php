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
        Schema::create('certified_members', function (Blueprint $table) {
            $table->id();
            $table->string('full_names');
            $table->string('national_id');
            $table->string('phone');
            $table->string('email');
            $table->date('approvaldate');
            $table->date('experydate');
            $table->unsignedBigInteger('courseCode');
            $table->string('training_location');
            $table->string('cert_serial');
            $table->string('status');
            $table->timestamps();

            $table->foreign('courseCode')->references('id')->on('tbl_courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certified_members');
    }
};
