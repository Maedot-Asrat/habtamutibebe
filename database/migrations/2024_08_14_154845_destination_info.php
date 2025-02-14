<?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration
        {
            /**
             * Run the migrations.
             */
            public function up(): void
            {
                Schema::create('destination_infos', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                    $table->enum('class',['eng','amh'])->default('eng');
                    $table->string('name');

                    $table->longText('description')->nullable();
                    $table->string('photo1')->nullable();
                    $table->string('photo2')->nullable();
                    $table->string('photo3')->nullable();
                    $table->string('video1')->nullable();
                    $table->string('video2')->nullable();
                    $table->string('video3')->nullable();
                });
            }
        
            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('destination_infos');
            }
        };
        
        //
    

