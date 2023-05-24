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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure');
            $table->string('arrival');
            $table->string('hour_departure');
            $table->string('hour_arrival');
            $table->smallInteger('train_code')->unsigned();
            $table->smallInteger('carriages')->unsigned();
            $table->boolean('status')->default(0);
            $table->boolean('drop')->default(0);

            $table->timestamps();
        });

        //Azienda
        //Stazione di partenza
        //Stazione di arrivo
        //Orario di partenza
        //Orario di arrivo
        //Codice Treno
        //Numero Carrozze
        //In orario
        //Cancellato
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
