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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cin');
            $table->string('cinrecto');
            $table->string('cinverso');
            $table->date('dateNaissance');
            $table->string('ice');
            $table->string('email')->unique();
            $table->integer('telephone')->unique();
            $table->string('adress');
            $table->integer('password')->unique();
            $table->date('dateDelivrence');
            $table->date('dateExpiration');
            $table->string('deleivrerPar');
            $table->foreignId('ville')->constrained('villes');
            $table->enum('status',['Active','Inactive']);
            $table->string('remarque');
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
        Schema::dropIfExists('clients');
    }
};
