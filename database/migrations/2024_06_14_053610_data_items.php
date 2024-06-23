<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_items', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('picker');
            $table->string('wilayah');
            $table->integer('total_picker');
            $table->string('kode_toko');
            $table->string('nama_toko');
            $table->integer('bl14_17');
            $table->integer('bl12_13');
            $table->integer('bd');
            $table->integer('krb');
            $table->integer('aki');
            $table->integer('oli');
            $table->integer('botol');
            $table->integer('kardus');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_items');
    }
};
