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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id_event');
            $table->foreignId('sport_id')->constrained('sports', 'id_sport');
            $table->foreignId('user_id')->constrained('users', 'id_user');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('status', 50);
            $table->dateTime('event_date');
            $table->tinyInteger('min_age')->unsigned()->nullable();
            $table->tinyInteger('max_players')->unsigned()->nullable();
            $table->tinyInteger('players_count')->unsigned()->default(0);
            $table->string('visibility', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
