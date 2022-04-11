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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->char('kode_fakultas', 4);
            $table->char('nama_fakultas', 50);
            $table->string('alamat');
            $table->char('telp', 15)->nullable();
            $table->char('website', 255)->nullable();

            $table->unsignedBigInteger('id_institusi');
            $table->foreign('id_institusi')->references('id')->on('institusi');
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
        Schema::dropIfExists('fakultas');
    }
};
