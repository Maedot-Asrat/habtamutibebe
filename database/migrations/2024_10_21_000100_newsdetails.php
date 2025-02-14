<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsDetails extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsdetails', function (Blueprint $table) {
            $table->id();
            $table->string('sub_heading');
            $table->string('slug')->unique();
            $table->string('headerphoto')->nullable();
            $table->longText('detail')->nullable();
            $table->date('publish_date');
            $table->string('video_link')->nullable();
            $table->string('photo1')->nullable();
            $table->unsignedBigInteger('news_id')->nullable();
            $table->unsignedBigInteger('child_news_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('SET NULL');
            $table->foreign('child_news_id')->references('id')->on('news')->onDelete('SET NULL');
          
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
        Schema::dropIfExists('newsdetails');
    }
}