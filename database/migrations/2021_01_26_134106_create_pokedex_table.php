<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokedexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokedex', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nameenglish', 12);
            $table->string('namejapanese', 6);
            $table->string('namechinese', 5);
            $table->string('namefrench', 12)->nullable();
            $table->string('type0', 8);
            $table->string('type1', 8)->nullable();
            $table->integer('baseHP');
            $table->integer('baseAttack');
            $table->integer('baseDefense');
            $table->integer('baseSp_Attack');
            $table->integer('baseSp_Defense');
            $table->integer('baseSpeed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokedex');
    }
}
