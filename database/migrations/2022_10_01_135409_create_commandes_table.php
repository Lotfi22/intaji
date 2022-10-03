<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('num_commande');
            $table->unsignedBigInteger('id_client');
            $table->string('nom_produit');
            $table->string('livreur');
            $table->integer('qte');
            $table->float('prix',8,0);
            $table->string('statut')->default('en attente');
            $table->string('user')->default('commerciale');
            $table->string('validator')->default('Pas encore');
            $table->string('commentaire')->default('Aucun commentaire');
            $table->string('freelancer')->default('Aucun');
            $table->string('BL')->default('/');
            $table->float('remise',8,0)->default(0);
            $table->float('versement',8,0)->default(0);

            $table->integer('id_depot');
            $table->string('status_client');

            $table->unsignedBigInteger('id_commande')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
