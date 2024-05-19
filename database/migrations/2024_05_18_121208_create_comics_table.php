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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->text('description')->nullable();
            $table->string('thumb', 255)->nullable();
            $table->string('price', 6)->nullable();
            $table->string('series', 30)->nullable();
            $table->dateTimeTz('sale_date')->nullable();
            $table->string('type', 30)->nullable()->default('comic book');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
