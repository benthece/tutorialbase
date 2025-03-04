<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_privileges', function (Blueprint $table) {
            $table->id();
            $table->string('name', 13);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('guid')->unique()->default('00000000-0000-0000-0000-000000000000');
            $table->string('username', 20)->unique();
            $table->string('email', 50)->unique();
            $table->char('password', 60);
            $table->timestamp('pw_modified_at')->nullable();
            $table->string('profile_pic_url', 50)->nullable();
            $table->string('bg_image_url', 50)->nullable();
            $table->string('bio', 100)->nullable();
            $table->foreignId('privilege_id')->default(3)->constrained('user_privileges', 'id');
            $table->unsignedTinyInteger('wishes')->default(5);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());
            $table->boolean('is_deleted')->default(false);
            // $table->rememberToken();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_privileges');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
