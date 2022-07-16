<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            // Azienda
            $table->string('company',30)->nullable();
            // Stazione di partenza
            $table->string('departure_station',30);
            // Stazione di arrivo
            $table->string('arrival_station',30);
            // Data di partenza
            $table->dateTime('departure_date');
            // Orario di partenza
            $table->time('departure_time');
            // Data di arrivo            
            $table->dateTime('arrival_date');
            // Orario di arrivo
            $table->time('arrival_time');
            // Codice Treno
            $table->mediumInteger('train_number')->unique();
            // Numero Carrozze
            $table->smallInteger('wagon')->nullable();
            // In orario
            $table->boolean('on_time')->default(true);
            // Cancellato
            $table->boolean('cancelled')->default(false);
            // timestamp
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
        // $table->dropcolumn('id');
        // $table->dropcolumn('company');
        // $table->dropcolumn('departure_station');
        // $table->dropcolumn('arrival_station');
        // $table->dropcolumn('departure_time');
        // $table->dropcolumn('arrival_time');
        // $table->dropcolumn('train_number');
        // $table->dropcolumn('wagon');
        // $table->dropcolumn('on_time');
        // $table->dropcolumn('cancelled');
        // $table->dropcolumn(); nome 1 mancante
        // $table->dropcolumn(); nome 2 mancante
    }
}
