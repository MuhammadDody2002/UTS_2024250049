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
        Schema::create('programstudi', function (Blueprint $table) {
            $table->id();
            $table->char('kode_prodi', 4);
            $table->char('nama_prodi', 50);
            $table->string('alamat');
            $table->char('telp', 15)->nullable();
            $table->char('website', 255)->nullable();

            $table->unsignedBigInteger('id_fakultas');
            $table->foreign('id_fakultas')->references('id')->on('fakultas');
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
        Schema::dropIfExists('programstudi');
    }
};
