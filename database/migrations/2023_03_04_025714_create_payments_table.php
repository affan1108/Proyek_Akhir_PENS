<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            // $table->foreignId('voucher_id')->constrained('vouchers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('user_id')->constrained('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('invoice_id')->constrained('invoices')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('warna_id')->constrained('warnas')->onUpdate('cascade')->onDelete('restrict');
            // $table->string('number');
            $table->integer('jumlah');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('gross_amount');
            $table->string('payment_type');
            $table->string('payment_code')->nullable();
            $table->string('pdf_url')->nullable();
            $table->string('resi')->nullable();
            $table->boolean('diterima')->nullable();
            $table->string('rating')->nullable();
            $table->string('foto')->nullable();
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
