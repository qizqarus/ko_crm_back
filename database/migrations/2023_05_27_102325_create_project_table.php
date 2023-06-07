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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('team_photo')->nullable();
            $table->string('project_name');
            $table->string('location');
            $table->string('status');
            $table->string('mentor');
            $table->string('partner');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('problem_prerequisites');
            $table->text('problem_description');
            $table->text('solutions');
            $table->text('innovation');
            $table->decimal('equipment_cost', 20)->nullable();
            $table->decimal('transportation_expenses', 20)->nullable();
            $table->decimal('services_cost', 20)->nullable();
            $table->decimal('rent_cost', 20)->nullable();
            $table->decimal('raw_materials_cost', 20)->nullable();
            $table->decimal('other_cost', 20)->nullable();
            $table->text('resources');
            $table->text('participants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
