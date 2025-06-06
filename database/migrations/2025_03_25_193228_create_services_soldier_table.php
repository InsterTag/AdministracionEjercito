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
        Schema::create('services_soldier', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('services_id')->nullable();
            $table->foreign('services_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade');

            $table->unsignedBigInteger('soldier_id')->nullable();
            $table->foreign('soldier_id')
            ->references('id')
            ->on('soldiers')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_soldiers');
    }
};
