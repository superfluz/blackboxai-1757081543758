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
        Schema::create('sql_queries', function (Blueprint $table) {
            $table->id();
            $table->text('sql_input');
            $table->string('database_type')->default('General SQL');
            $table->string('function_type')->default('SQL Formatting');
            $table->string('model_used')->nullable();
            $table->longText('result')->nullable();
            $table->json('metadata')->nullable(); // Store processing time, tokens, etc.
            $table->string('session_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sql_queries');
    }
};
