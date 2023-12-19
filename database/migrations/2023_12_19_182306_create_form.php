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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->text('route');
            $table->text('agency');
            $table->text('employee_number');
            $table->unsignedBigInteger('tag');
            $table->timestamps();
        });

        Schema::create('tap', function (Blueprint $table) {
            $table->id();
            $table->text('ip')->nullable();
            $table->text('device')->nullable();
            $table->text('location')->nullable();
            $table->text('operative_system')->nullable();
            $table->unsignedBigInteger('tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tap');
        Schema::dropIfExists('form');
    }
};
