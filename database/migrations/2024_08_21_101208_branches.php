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
                Schema::create('branches', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                    $table->enum('class',['eng','amh'])->default('eng');
                    $table->string('name');
                    $table->longText('description')->nullable();
                    $table->string('photo')->nullable();
                    $table->string('location')->nullable();
                    $table->string('email')->nullable();
                    $table->string('phone')->nullable();
                });
            }
        
            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('branches');
            }
        };
        
        //
    

