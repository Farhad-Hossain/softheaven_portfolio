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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title', 191);
            $table->string('title_short_description', 191)->nullable();
            $table->string('photo', 191);
            $table->string('first_button_text', 191)->nullable();
            $table->string('first_button_link', 191)->nullable();
            $table->string('second_button_text', 191)->nullable();
            $table->string('second_button_link', 191)->nullable();
            $table->unsignedSmallInteger('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
