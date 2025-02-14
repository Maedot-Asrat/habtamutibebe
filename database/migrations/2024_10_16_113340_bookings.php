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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('phone');
            $table->string('full_name');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('package_name')->nullable();
            $table->unsignedBigInteger('child_package_id')->nullable();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('SET NULL');
          
            $table->foreign('child_package_id')->references('id')->on('packages')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
