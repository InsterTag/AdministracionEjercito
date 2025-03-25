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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('grade');

            $table->unsignedBigInteger('army_corp_fk')->nullable();
            $table->foreign('army_corp_fk')
            ->references('id')
            ->on('armycorps')
            ->onDelete('set null');

            $table->unsignedBigInteger('company_fk')->nullable();
            $table->foreign('company_fk')
            ->references('id')
            ->on('companies')
            ->onDelete('set null');

            $table->unsignedBigInteger('barracks_fk')->nullable();
            $table->foreign('barracks_fk')
            ->references('id')
            ->on('barracks')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
