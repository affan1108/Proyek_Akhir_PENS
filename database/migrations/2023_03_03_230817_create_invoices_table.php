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
            $table->foreignId('ongkir_id')->constrained('ongkirs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('voucher_id')->constrained('vouchers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('warna_id')->constrained('warnas')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('jumlah');
            $table->string('total');
            $table->foreignId('payment_id')->constrained('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->string('hpp');
            $table->string('hitung');
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
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
