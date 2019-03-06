<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration
{
	/**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('film', function (Blueprint $table)
		{
			$table->integer('id_kategori');
			$table->string('nama_kategori', 25);
			
		});
	}
}