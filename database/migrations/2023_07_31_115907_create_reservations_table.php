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
            $table->string('object');
            $table->date('datereservation');
            $table->foreignId('client')->constrained('clients');

            // Voyage
            $table->foreignId('vproduit')->constrained('produits')->nullable();
            $table->foreignId('vprogramme')->constrained('programmes')->nullable();
            $table->foreignId('vhotel')->constrained('hotels')->nullable();
            $table->foreignId('vchambre')->constrained('chambers')->nullable();
            $table->date('vdateDepart')->nullable();
            $table->date('vdateRetoure')->nullable();
            $table->integer('vprixachat')->nullable()->default(0);
            $table->integer('vprixvente')->nullable()->default(0);
            $table->integer('vqte')->nullable()->default(0);
            $table->integer('vtotal')->nullable()->default(0);

            // Hotel

            $table->foreignId('hhotel')->nullable()->constrained('hotels');
            $table->foreignId('hpay')->constrained('pays')->nullable();
            $table->foreignId('hville')->constrained('villes')->nullable();
            $table->date('hdateDepart')->nullable();
            $table->date('hdateRetoure')->nullable();
            $table->integer('hprixachat')->nullable()->default(0);
            $table->integer('hprixvente')->nullable()->default(0);
            $table->integer('hqte')->nullable()->default(0);
            $table->integer('htotal')->nullable()->default(0);

            // Billet

            $table->foreignId('bcompagnie')->constrained('compagnies')->nullable();
            $table->foreignId('btypebillet')->constrained('billetteries')->nullable();
            $table->date('bdateDepart')->nullable();
            $table->date('bdateRetoure')->nullable();
            $table->integer('bprixachat')->nullable()->default(0);
            $table->integer('bprixvente')->nullable()->default(0);
            $table->integer('bqte')->nullable()->default(0);
            $table->integer('btotal')->nullable()->default(0);

            $table->integer('montant_a_payer')->default(0);
            $table->integer('montant_payer')->default(0);
            $table->integer('montant_rest_a_payer')->default(0);

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
