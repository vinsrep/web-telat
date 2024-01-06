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
        Schema::create('lates', function (Blueprint $table) {
            $table->char('id'); //pk
            $table->dateTime('date_time_late');
            $table->timestamps();
            $table->text('information');
            $table->text('bukti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lates');
    }
};
