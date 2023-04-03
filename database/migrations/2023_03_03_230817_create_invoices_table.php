<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('department_id')->constrained('m_departments')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('keranjang_id')->constrained('keranjangs')->onUpdate('restrict')->onDelete('cascade');
            $table->foreignId('ongkir_id')->constrained('ongkirs')->onUpdate('restrict')->onDelete('cascade');
            $table->foreignId('voucher_id')->constrained('vouchers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('warna_id')->constrained('warnas')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('jumlah');
            $table->string('total');
            $table->string('diskon');
            $table->enum('status', ['Belum dibayar', 'Sudah dibayar']);
            $table->string('hitung');
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
        Schema::dropIfExists('invoices');
    }
}
