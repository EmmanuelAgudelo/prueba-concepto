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
        Schema::create('violation_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('traffic_violation_id')->constrained('traffic_violations');
            $table->foreignId('detection_data_id')->constrained('detection_data');
            $table->text('details')->nullable();
            $table->timestamp('triggered_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violation_records');
    }
};
