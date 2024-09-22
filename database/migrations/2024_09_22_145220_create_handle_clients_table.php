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
        Schema::create('handle_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->date('follow_up_1')->nullable();
            $table->date('follow_up_2')->nullable();
            $table->date('follow_up_3')->nullable();
            $table->date('follow_up_4')->nullable();
            $table->enum('status_follow_up', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->boolean('booking_fee')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handle_clients');
    }
};
