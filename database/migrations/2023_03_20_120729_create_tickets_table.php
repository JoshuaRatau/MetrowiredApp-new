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
        Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->string('region');
        $table->string('network_type');
         $table->string('affected_user');
        $table->string('ticket_number');
         $table->string('contact');
         $table->string('title');
         $table->unsignedBigInteger('assigned_to')->nullable();
        $table->string('fixes');
         $table->string('alternate_contact');
         $table->text('description');
         $table->string('location');
            
            $table->timestamps();

            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
