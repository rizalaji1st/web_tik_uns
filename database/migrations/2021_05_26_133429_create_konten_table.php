<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('slug');
            $table->text('konten');
            $table->bigInteger('id_kategori');
            $table->boolean('is_active');
            $table->boolean('is_main');
            $table->string('path_gambar');
            $table->dateTime('created_at')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->bigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konten');
    }
}
