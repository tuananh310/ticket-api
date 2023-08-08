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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->text('air_company');
            $table->text('start_location');
            $table->text('end_location');
            $table->text('type');
            $table->timestamp('start_time');
            $table->text('flight_number');
            $table->text('price');
            $table->text('tax');
            $table->text('total_price');
            $table->text('deposit_fee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
