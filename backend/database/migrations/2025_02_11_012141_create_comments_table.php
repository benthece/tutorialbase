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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->uuid('guid')->default('00000000000000000000000000000000');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('video_id')->constrained('videos', 'id');
            $table->string('text', 100);
            $table->timestamp('created_at')->default(now());
            $table->timestamp('modified_at')->nullable();
            $table->boolean('is_deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
