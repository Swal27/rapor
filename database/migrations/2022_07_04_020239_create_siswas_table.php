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
        Schema::create('siswas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nis_siswa', 10)->index();
            $table->string('nama', 50);
            $table->string('alamat', 50)->nullable();
            $table->string('telp', 12)->nullable();
            $table->date('tgllhr')->nullable();
            $table->timestamps();
            $table->primary('nis_siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
