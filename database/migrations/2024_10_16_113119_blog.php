<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('headerphoto')->nullable();
            $table->longText('description')->nullable();
            $table->date('publish_date');
            $table->string('video_link')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            $table->unsignedBigInteger('blogcat_id')->nullable();
            $table->unsignedBigInteger('child_blogcat_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('blogcat_id')->references('id')->on('blogcategories')->onDelete('SET NULL');
            $table->foreign('child_blogcat_id')->references('id')->on('blogcategories')->onDelete('SET NULL');
          
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};