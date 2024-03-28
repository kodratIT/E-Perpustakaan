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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('book_categories')->cascadeOnDelete();
            $table->foreignId('bookcase_id')->constrained('book_cases')->cascadeOnDelete();
            $table->string('title');
            $table->string('isbn');
            $table->string('book_no');
            $table->string('sampul');
            $table->string('lampiran');
            $table->string('warna');
            $table->string('pengarang');
            $table->string('tahun_terbit');
            $table->string('description');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
