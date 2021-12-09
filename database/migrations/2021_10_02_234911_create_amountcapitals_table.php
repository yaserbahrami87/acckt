<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountcapitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amountcapitals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable()->index();
            $table->bigInteger('capitalgroup_id')->nullable();
            $table->bigInteger('capitalcategory_id')->nullable();
            $table->string('trl',250)->nullable();
            $table->string('statute',250)->nullable();
            $table->string('description',250)->nullable();
            $table->string('description_startup',250)->nullable();
            $table->bigInteger('injectioncapital_id')->nullable();
            $table->bigInteger('amountcapitals_id')->nullable();
            $table->string('outstanding_investment',250)->nullable();
            $table->string('request',250)->nullable();
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
        Schema::dropIfExists('amountcapitals');
    }
}
