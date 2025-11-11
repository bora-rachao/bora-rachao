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
        Schema::create('event_addresses', function (Blueprint $table) {
            $table->id('id_event_address');
            $table->foreignId('event_id')->constrained('events', 'id_event');
            $table->string('zip_code', 20);
            $table->string('house_number', 20);
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_addresses');
    }
};
