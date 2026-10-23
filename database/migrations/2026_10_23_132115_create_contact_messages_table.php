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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_or_phone');
            $table->string('type')->default('contact'); // 'contact' or 'feedback'
            $table->string('subject')->nullable();
            $table->text('message');
            $table->unsignedTinyInteger('rating')->nullable(); // Optional star rating 1-5 for feedback
            $table->string('status')->default('new'); // 'new', 'read', 'replied'
            $table->text('admin_notes')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
