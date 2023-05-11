<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('produk_id')->constrained('hijabs')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('warna_id')->constrained('warnas')->onUpdate('restrict')->onDelete('restrict');
            $table->boolean('keranjang')->nullable();
            // $table->string('nama');
            // $table->string('warna');
            // $table->string('ukuran');
            $table->integer('jumlah');
            // $table->string('harga');
            $table->string('hitung');
            // $table->string('_method')->nullable();
            // $table->foreignId('voucher')->constrained('vouchers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('invoice_id')->constrained('invoices')->onUpdate('restrict')->onDelete('restrict');
            // $table->string('voucher')->nullable();
            $table->string('kota')->nullable();
            $table->string('kurir')->nullable();
            $table->string('ongkir')->nullable();
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
        Schema::dropIfExists('keranjangs');
    }
}
