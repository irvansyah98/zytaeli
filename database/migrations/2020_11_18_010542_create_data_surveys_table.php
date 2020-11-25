<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',array('Laki-laki','Perempuan'));
            $table->enum('pendidikan_terakhir',array('SD','SMP','SMA','Diploma','Sarjana'));
            $table->integer('gaji');
            $table->integer('pengeluaran_pdam');
            $table->integer('pengeluaran_pln');
            $table->boolean('is_verified')->default(0);
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
        Schema::dropIfExists('data_surveys');
    }
}
