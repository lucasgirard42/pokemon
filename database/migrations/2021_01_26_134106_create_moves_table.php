<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moves', function (Blueprint $table) {
            $table->integer('accuracy')->primary();
            $table->string('category', 2);
            $table->string('cname', 6)->nullable();
            $table->string('ename', 16);
            $table->integer('id');
            $table->string('jname', 8);
            $table->integer('power')->nullable();
            $table->integer('pp')->nullable();
            $table->string('type', 8);
            $table->integer('tm')->nullable();
            $table->integer('max_pp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moves');
    }
}
