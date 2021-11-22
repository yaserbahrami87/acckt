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
            $table->string('phone',20)->nullable();
            $table->boolean('tel_verify')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('type')->nullable();
            $table->string('avatar',250)->nullable();
            $table->string('birth_date',11)->nullable();
            $table->string('national_code',30)->nullable()->index();
            $table->string('address',250)->nullable();
            $table->string('biography',250)->nullable();
            $table->string('site',150)->nullable();
            $table->string('university',150)->nullable();
            $table->string('faculty',150)->nullable();
            $table->string('study_field',150)->nullable();
            $table->string('major',150)->nullable();
            $table->string('supervisor_reason',250)->nullable();
            $table->string('instagram',50)->nullable();
            $table->string('linkedin',100)->nullable();
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
