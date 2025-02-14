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
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
            $table->longText('description')->nullable();
            $table->string('publish_date')->nullable();
            $table->string('size')->nullable();
            $table->unsignedBigInteger('artcat_id')->nullable();
            $table->unsignedBigInteger('child_artcat_id')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('artcat_id')->references('id')->on('artcategories')->onDelete('SET NULL');
            $table->foreign('child_artcat_id')->references('id')->on('artcategories')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arts');
    }
};