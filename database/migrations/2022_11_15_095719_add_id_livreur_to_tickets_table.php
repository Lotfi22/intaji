<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdLivreurToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) 
        {

            Schema::table('tickets', function($table) 
            {
                $table->integer('id_livreur');
            });

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) 
        {

            Schema::table('users', function($table) 
            {
                $table->dropColumn('id_livreur');
            });

            //
        });
    }
}
