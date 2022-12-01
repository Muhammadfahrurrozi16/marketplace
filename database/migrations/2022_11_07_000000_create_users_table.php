<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')
            ->references('id') 
            ->on('user_roles')  
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->foreignId('toko_id')
            ->references('id') 
            ->on('tokos')  
            ->constrained() 
            ->onUpdate('cascade') 
            ->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('nohp');
            $table->date('tanggal_lahir');
            $table->string('password');
            $table->string('alamat');
            $table->string('lokasi');
            $table->string('image');
            $table->enum('aktif',['y','n']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
