<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aboutus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->enum('class',['eng','amh'])->default('eng');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('mission');
            $table->longText('vision');
            $table->longText('goal');
            $table->longText('value');
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
           
            $table->enum('status',['active','inactive'])->default('inactive');
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
        Schema::dropIfExists('abouts');
    }
}
