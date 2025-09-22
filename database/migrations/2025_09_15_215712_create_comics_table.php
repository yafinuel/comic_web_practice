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
            $table->string('title');
            $table->json('aliases')->nullable();
            $table->string('author');
            $table->enum('genre', ['action', 'comedy', 'drama', 'fantasy', 'harem', 'horror', 'isekai', 'magic', 'mystery', 'romance', 'regression', 'slice of life', 'martial arts', 'shounen', 'shoujo', 'sports']);
            $table->enum('status', ['ongoing', 'completed', 'hiatus']);
            $table->enum('type', ['manga', 'manhwa', 'manhua']);
            $table->longText('description')->nullable();
            $table->timestamp('published_at')->nullable();
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
