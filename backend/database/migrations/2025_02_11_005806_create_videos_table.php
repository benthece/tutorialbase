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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->uuid('guid')->default('00000000-0000-0000-0000-000000000000');
            $table->string('title', 32);
            $table->string('description', 100);
            $table->string('url', 50);
            $table->string('base_image_url', 50)->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->boolean('is_deleted')->default(false);
            $table->timestamp('uploaded_at')->default(now());
            $table->timestamp('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
