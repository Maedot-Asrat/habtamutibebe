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
                Schema::create('destinations', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                    $table->string('name');
                    $table->text('activity')->nullable();
                    $table->string('photo');
                    $table->string('video');
                   
                });
            }
        
            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('destinations');
            }
        };
        
        //
    

