<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsdos0617Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('asdos0617', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nama');
        $table->string('mata_kuliah');
        $table->string('email');
        $table->string('no_hp');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asdos0617');
    }
}
