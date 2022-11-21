<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') 
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('seller_id')
            ->references('id') 
            ->on('users') 
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('jasa_id') 
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('pembayaran_id') 
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->date('tanggal_order');
            $table->date('tanggal_acara');
            $table->string('catatan');
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
        Schema::dropIfExists('pemesanans');
    }
}
