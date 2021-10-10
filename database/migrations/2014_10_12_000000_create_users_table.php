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
            $table->string('fname',100)->nullable();
            $table->string('lname',100)->nullable();
            $table->string('email',250)->unique();
            $table->string('tel',20)->unique()->index();
            $table->boolean('tel_verify')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('type')->default(1);
            $table->string('image_profile',250)->nullable();
            $table->bigInteger('amountcapitals_id')->nullable();
            $table->bigInteger('investmentIndex_id')->nullable();
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
