<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transaction', function (Blueprint $table) {
            $table->Increments('payment_id');
            $table->double('membership_number', 11);
            $table->Date('payment_date');
            $table->String('description', 75);
            $table->Float('amount_paid');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_transaction');
    }
}
