<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->integer('group')->nullable();
            $table->string('avatar',250)->nullable();
            $table->tinyInteger('category')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('group_name',100)->nullable();
            $table->string('full_name',250)->nullable();
            $table->string('birth_date',250)->nullable();
            $table->string('mobile',250)->nullable();
            $table->string('email',250)->nullable();
            $table->string('degree_and_field_of_study',250)->nullable();
            $table->string('specialty',250)->nullable();
            $table->string('title',100)->nullable();
            $table->string('description',250)->nullable();
            $table->string('similar_idea',100)->nullable();
            $table->tinyInteger('level')->nullable();
            $table->string('idea_property',250)->nullable();
            $table->tinyInteger('amountcapitals_id')->nullable();
            $table->string('your_request',250)->nullable();
            $table->string('date_fa',11)->nullable();
            $table->string('time_fa',11)->nullable();
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
        Schema::dropIfExists('ideas');
    }
}
