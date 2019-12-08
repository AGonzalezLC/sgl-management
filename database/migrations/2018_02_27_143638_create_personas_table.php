<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100)->unique();
            $table->string('tipo_documento', 20)->nullable();
            $table->string('num_documento', 20)->nullable();
            $table->string('direccion', 70)->nullable();
            $table->string('localidad', 70)->nullable();
            $table->string('codigo_postal', 5)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamps();
        });
        DB::table('personas')->insert(array('id'=>'1',
        'nombre'=>'Sonia González La Carrubba',
        'tipo_documento'=>'DNI',
        'num_documento'=>'46978860A',
        'direccion'=>'C/Torres, 29',
        'localidad'=>'València',
        'codigo_postal'=>'46018',
        'telefono'=>'680377141',
        'email'=>'info@sglreformas.com'));
        DB::table('personas')->insert(array('id'=>'2',
        'nombre'=>'Toni González La Carrubba',
        'tipo_documento'=>'DNI',
        'num_documento'=>'46978861G',
        'direccion'=>'Av/Poal, 8',
        'localidad'=>'Castelldefels',
        'codigo_postal'=>'08860',
        'telefono'=>'645466515',
        'email'=>'info@tonygonzalezlc.com'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
