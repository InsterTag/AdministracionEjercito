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
        Schema::create('barracks_companies', function (Blueprint $table) {
            $table->id();

            $table->string('date');
            $table->unsignedBigInteger('barracks_fk')->nullable();
            $table->foreign('barracks_fk')
            ->references('id')
            ->on('barracks')
            ->onDelete('cascade');

            $table->unsignedBigInteger('company_fk')->nullable();
            $table->foreign('company_fk')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barracks_companies');
    }
};
