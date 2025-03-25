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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            // $table->string('chart_number')->unique();
            // $table->foreignId('primary_physician_id')->constrained('users');
            // $table->date('last_visit_date');
            // $table->date('next_preventive_date');
            // $table->string('ssn')->encrypted();
            // $table->text('medical_history')->encrypted();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
