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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255)->unique();
            $table->string('tipo');
            $table->text('direccion');
            $table->string('telefono',100);
            $table->text('url_web');
            $table->text('image');
            $table->text('slug')->unique();
            $table->integer('likes');
            $table->unsignedBigInteger('id_municipio');

            $table->foreign('id_municipio')->references('id')->on('municipalities')->onDelete('cascade');

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
        Schema::dropIfExists('universities');
    }
};
