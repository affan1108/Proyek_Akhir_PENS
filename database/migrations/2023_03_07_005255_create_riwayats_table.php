<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('payment_id')->constrained('payments')->onUpdate('restrict')->onDelete('restrict');
            // $table->string('number');
            $table->string('rating');
            $table->string('foto');
            $table->string('deskripsi');
            // $table->string('payment_type');
            // $table->string('payment_code')->nullable();
            // $table->string('pdf_url')->nullable();
            // $table->boolean('diterima')->nullable();
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
        Schema::dropIfExists('riwayats');
    }
}
