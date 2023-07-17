<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idServico');
            $table->unsignedBigInteger('idCliente');
            $table->date('data');
            $table->time('hora');
            $table->string('local');
            $table->text('descricao');
            $table->timestamps();

            $table->foreign('idServico')->references('id')->on('servicos')->onDelete('CASCADE');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('CASCADE');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
