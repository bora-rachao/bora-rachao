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
        Schema::create('event_players', function (Blueprint $table) {
            $table->id('id_event_player');
            $table->foreignId('event_id')->constrained('events', 'id_event');
            $table->foreignId('user_id')->constrained('users', 'id_user');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_players');
    }
};
