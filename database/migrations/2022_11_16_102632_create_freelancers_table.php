<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('telephone')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('password')->nullable(true);
            $table->string('password_text')->nullable(true);
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
        Schema::dropIfExists('freelancers');
    }
}
