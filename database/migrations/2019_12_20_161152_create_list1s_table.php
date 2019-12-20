<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateList1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('films_ids')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                    ->references('id')
                    ->on('users');
                    //onDelete('cascade');
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
        Schema::dropIfExists('list1s');
    }
}
