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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('experience_years');
            // carte national doc ??
            // certificats docs ??
            $table->integer('evaluation');
            $table->string('adress');
            $table->foreignId('work_id');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->boolean('is_banned');
            $table->boolean('is_accepted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
