<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijabs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('foto');
            // $table->string('warna')->nullable();
            // $table->foreignId('warna_id')->constrained('warnas')->onUpdate('cascade')->onDelete('restrict');
            // $table->string('ukuran');
            $table->string('harga');
            $table->text('deskripsi');
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
        Schema::dropIfExists('hijabs');
    }
}
