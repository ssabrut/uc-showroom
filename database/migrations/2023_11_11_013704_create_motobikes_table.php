<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('motobikes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->float('trunk_area');
            $table->float('fuel_capacity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('motobikes');
    }
};
