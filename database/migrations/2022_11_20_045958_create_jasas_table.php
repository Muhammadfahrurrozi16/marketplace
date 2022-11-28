<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('seller_id')
            ->references('id') 
            ->on('users')  
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('kategori_id')
            ->references('id') 
            ->on('kategori_jasas')  
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('penilaian_id') 
            ->nullable()
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->integer('harga');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('diskon')->nullable();
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
        Schema::dropIfExists('jasas');
    }
}
