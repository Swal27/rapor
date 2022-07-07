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
        Schema::create('rapors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nis_rapor');
            $table->foreign('nis_rapor')->references('nis_siswa')->on('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kdmapelr');
            $table->foreign('kdmapelr')->references('kdmapel')->on('mapels')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nilai');
            $table->string('predikat', 1);
            $table->string('ket')->nullable();
            $table->timestamps();
            $table->primary(['nis_rapor','kdmapelr']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapors');
    }
};
