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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',20);
            $table->string('departure_station',50);
            $table->string('arrival_station',50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->unsignedMediumInteger('train_code');
            $table->unsignedTinyInteger('carriages_number');
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
