<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propietario')->nullable();
            $table->foreign('propietario')
                ->references('id')->on('propietarios')
                ->onDelete('set null');

            $table->unsignedBigInteger('inmueble')->nullable();
            $table->foreign('inmueble')
                ->references('id')->on('propiedades')
                ->onDelete('set null');

            $table->unsignedBigInteger('tipo_propietario')->nullable();
            $table->foreign('tipo_propietario')
                ->references('id')->on('tipos_propietarios')
                ->onDelete('set null');

            $table->unsignedBigInteger('tipo_negocio')->nullable();
            $table->foreign('tipo_negocio')
                ->references('id')->on('tipos_negocios')
                ->onDelete('set null');

            $table->string('paso')->nullable();
            $table->unsignedBigInteger('plan')->nullable();
            $table->foreign('plan')
                ->references('id')->on('planes')
                ->onDelete('set null');

            $table->string('valor')->nullable();
            $table->biginteger('conc_precio')->nullable();
            $table->biginteger('precio_contrato')->nullable();

            $table->unsignedBigInteger('conc_juridico')->nullable();
            $table->foreign('conc_juridico')
                ->references('id')->on('conc_juridicos')
                ->onDelete('set null');
            $table->text('obs_conc_juridico')->nullable();
            $table->string('fotos')->nullable();
            $table->string('cpvj')->nullable();
            $table->string('ip_address', 45);
            $table->text('user_agent');
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
        Schema::dropIfExists('negocios');
    }
}
