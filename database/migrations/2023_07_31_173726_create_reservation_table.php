<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('idv');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('compagnie');
            $table->date('dateDepart');
            $table->time('heureDepart');
            $table->string('source');
            $table->string('destination');
            $table->integer('montantBillet');
            $table->date('dateReservation');
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
        Schema::dropIfExists('reservation');
    }
}
