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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('Nreservation');
            $table->foreignId('client')->constrained('clients');

            // Voyage
            $table->foreignId('vproduit')->constrained('produits');
            $table->foreignId('vprogramme')->constrained('programmes');
            $table->foreignId('vhotel')->constrained('hotels');
            $table->foreignId('vchambre')->constrained('chambres');
            $table->date('vdateDepart');
            $table->date('vdateRetoure');
            $table->integer('vprixachat');
            $table->integer('vprixvente');
            $table->integer('vqte');
            $table->integer('vtotal');

            // Hotel 

            $table->foreignId('hhotel')->constrained('hotels');
            $table->foreignId('hpay')->constrained('pays');
            $table->foreignId('hville')->constrained('vills');
            $table->date('hdateDepart');
            $table->date('hdateRetoure');
            $table->integer('hprixachat');
            $table->integer('hprixvente');
            $table->integer('hqte');
            $table->integer('htotal');


            // Billet


            $table->foreignId('bcompagnie')->constrained('compagnies');
            $table->foreignId('btypebillet')->constrained('billetteries');
            $table->date('bdateDepart');
            $table->date('bdateRetoure');
            $table->integer('bprixachat');
            $table->integer('bprixvente');
            $table->integer('bqte');
            $table->integer('btotal');


            $table->integer('montant_a_payer');
            $table->integer('montant_payer');
            $table->integer('montant_rest_a_payer');

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
        Schema::dropIfExists('reservations');
    }
};
