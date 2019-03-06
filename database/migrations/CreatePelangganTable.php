<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganTable extends Migration
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
			$table->string('nama', 100);
			$table->string('jenis_kelamin', 50);
			$table->date('tgl_lahir', 50);
			$table->text('alamat', 100);
		});
	}
}