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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hotline_no',14);
            $table->string('logo', 250);
            $table->string('title_message', 80);
            $table->string('sub_title_message', 150);
            $table->string('promo_video_link');
            $table->string('trusted_clients_count');
            $table->unsignedFloat('rating')->default(0);
            $table->string('address', 300);
            $table->string('contact_no_1',14);
            $table->string('contact_no_2',14);
            $table->string('contact_email');
            $table->string('company_link');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
