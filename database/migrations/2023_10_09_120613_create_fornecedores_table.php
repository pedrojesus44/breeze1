<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Criando atributos da tabela
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('site', 50);
            $table->string('uf', 50);
            $table->string('email', 50);
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
        Schema::table('fornecedores', function(Blueprint $table) {
            //remover a coluna site
            $table->dropColumn('site');
        });

        Schema::dropIfExists('fornecedores');
        // Schema::drop('fornecedores');
    }
};
