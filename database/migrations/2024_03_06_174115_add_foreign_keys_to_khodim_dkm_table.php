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
        Schema::table('khodim_dkm', function (Blueprint $table) {
            $table->foreign(['Jabatan_Khodim'], 'khodim_dkm_ibfk_1')->references(['Kode_Bidang_Khodim'])->on('bidang_khodim')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['updated_by'], 'khodim_dkm_ibfk_3')->references(['email'])->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['inserted_by'], 'khodim_dkm_ibfk_2')->references(['email'])->on('users')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('khodim_dkm', function (Blueprint $table) {
            $table->dropForeign('khodim_dkm_ibfk_1');
            $table->dropForeign('khodim_dkm_ibfk_3');
            $table->dropForeign('khodim_dkm_ibfk_2');
        });
    }
};
