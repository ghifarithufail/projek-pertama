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
        Schema::create('calegs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partai_id');
            $table->foreign('partai_id')->references('id')->on('partais')->onDelete('cascade');
            $table->string('calon');
            $table->string('image');
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
        Schema::dropIfExists('calegs');
    }
};
