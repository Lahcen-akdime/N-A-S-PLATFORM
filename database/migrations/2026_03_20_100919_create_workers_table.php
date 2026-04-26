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
            $table->integer('evaluation')->default(1);
            $table->string('adress');
            $table->foreignId('work_id')->constrained();
            $table->string('profile_image');
            $table->string('ville');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete() ;
            $table->string('latitude');
            $table->string('longitude');
            $table->string('phone');
            $table->boolean('is_banned')->default(false);
            $table->boolean('is_accepted')->default(false);
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
