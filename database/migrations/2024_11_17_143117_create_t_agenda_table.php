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
        Schema::create('t_agenda', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->unsignedBigInteger('id_kegiatan')->nullable();
            $table->timestamps();

            $table->foreign('id_kegiatan', 'fk_agenda_kegiatan')->references('id_kegiatan')->on('t_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_agenda');
    }
};