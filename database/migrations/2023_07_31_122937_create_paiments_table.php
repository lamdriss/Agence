<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiments', function (Blueprint $table) {
            $table->id();
            $table->date('datepaiment');
            $table->date('dateEchance');
            $table->ineteger('recu');
            $table->ineteger('pieceN');
            $table->ineteger('montantpaye');
            $table->enum('sitaution',['Payer','Impayer']);
            $table->foreignId('modePaiment')->constrained('modepaimants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiments');
    }
};
