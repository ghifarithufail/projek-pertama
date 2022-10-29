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
        Schema::create('hasil_suaras', function (Blueprint $table) {
            $table->id();
            $table->foreign('codeteam_id')->references('id')->on('koord_teams')->onDelete('cascade');
            $table->unsignedBigInteger('codeteam_id');
            $table->foreign('calon_id')->references('id')->on('calegs')->onDelete('cascade');
            $table->unsignedBigInteger('calon_id');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabkota');
            $table->string('provinsi');
            $table->string('dapil');
            $table->char('tps');
            $table->integer('suara');
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
        Schema::dropIfExists('hasil_suaras');
    }
};
