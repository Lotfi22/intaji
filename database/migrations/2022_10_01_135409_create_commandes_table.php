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
            $table->string('livreur')->nullable();
            $table->integer('qte');
            $table->float('prix',8,0);
            $table->string('statut')->default('en attente');
            $table->string('user')->default('commerciale');
            $table->string('validator')->default('Pas encore');
            $table->string('commentaire')->default('Aucun commentaire');
            $table->string('freelancer')->default('Aucun')->nullable();
            $table->string('BL')->default('/');
            $table->integer('id_depot')->nullable(true);
            $table->string('status_client')->default('aucun');
            $table->string('motif_annulation')->nullable(true);
            $table->unsignedBigInteger('num_livraison')->nullable(true);
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
