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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name')->charset('utf8');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->unsignedBigInteger('truck_id')->nullable();

            # create foreign keys
            $table->foreign('driver_id')->on('drivers')->references('id')->onDelete('set null');
            $table->foreign('truck_id')->on('trucks')->references('id')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
