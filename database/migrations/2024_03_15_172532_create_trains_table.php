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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda')->nullable();
            $table->string('stazione_di_partenza')->nullable();
            $table->string('stazione_di_arrivo')->nullable();
            $table->dateTime('orario_di_partenza')->nullable();
            $table->dateTime('orario_di_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
