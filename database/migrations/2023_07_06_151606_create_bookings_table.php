<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Assuming you have a users table
            $table->string('name');
            $table->string('room_type'); // Assuming you have a rooms table
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('status'); // Assuming you have a rooms table
            $table->timestamps();
            // Add more columns as per your requirements

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}