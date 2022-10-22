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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('carera',155);
            $table->string('slug',255);
            $table->longText('descripcion');
            $table->longText('objetivo');
            $table->longText('aprendizaje');
            $table->longText('trabajo');
            $table->longText('perfil_ingreso');
            $table->longText('perfil_egreso');
            $table->longText('plan_estudio');
            $table->longText('image');
            $table->integer('likes');
            $table->string('tipo',100);
            $table->unsignedBigInteger('id_universidad');
            $table->foreign('id_universidad')->references('id')->on('universities')->onDelete('cascade');


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
        Schema::dropIfExists('careers');
    }
};
