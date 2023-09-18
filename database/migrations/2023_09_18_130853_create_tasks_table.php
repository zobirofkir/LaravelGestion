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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->date('date');
            $table->text('status');
            $table->unsignedBigInteger('user_id')->nullable(); // Change default(0) to nullable()
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
