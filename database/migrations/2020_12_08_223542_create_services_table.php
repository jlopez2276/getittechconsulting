<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clientId');
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->string('preparedByName');
            $table->decimal('salesTaxAmount',6,2);
            $table->decimal('estimatedTotalCost',6,2);
            $table->decimal('actualTotalCost',6,2);
            $table->enum('Status',['InQuote','Invoiced']);
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
        Schema::dropIfExists('services');
    }
}
