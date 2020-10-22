<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();

            $table->string('receipt_title');
            $table->string('customername');
            $table->string('customerfathername');
            $table->string('customeraddress');
            $table->interger('customercontact');

        //    $table->string('receipt_customeremail');
          //  $table->string('receipt_customerdob');

             $table->string('plot_size');
             $table->unsignedBigInteger('plot_totalprice');
             $table->unsignedBigInteger('plot_tokenprice');
             $table->string('block_location');
             $table->text('plot_description');
             $table->string('image')->nullable();







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
        Schema::dropIfExists('receipts');
    }
}
