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
        Schema::create('cash_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('cash_books')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('cash_entry_categories')->onDelete('cascade');
            $table->foreignId('cash_entry_type_id')->constrained('cash_entry_types')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->text('remarks')->nullable();
            $table->date('entry_date');
            $table->time('entry_time');
            $table->string('contact_person')->nullable();
            $table->foreignId('payment_mode_id')->constrained('cash_payment_modes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_entries');
    }
};