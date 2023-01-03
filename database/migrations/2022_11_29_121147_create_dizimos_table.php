<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDizimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dizimos', function (Blueprint $table) {
            $table->id();
            $table->string('valor');
            $table->string('comprovante');
            $table->unsignedBigInteger('membro_id');
            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
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
        Schema::dropIfExists('dizimos');
    }
}
