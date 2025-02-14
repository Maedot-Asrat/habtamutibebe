<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_applications', function (Blueprint $table) {
            $table->id();

            // Individual filling information
            $table->string('name_to_grandmother')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('kebele')->nullable();
            $table->string('house_number')->nullable();
            $table->string('po_sa_number')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('id_number')->nullable();

            // Ethiopian-born foreigner information
            $table->string('foreigner_name_to_grandmother')->nullable();
            $table->string('foreign_region')->nullable();
            $table->string('foreign_city')->nullable();
            $table->string('foreign_kebele')->nullable();
            $table->string('foreign_house_number')->nullable();
            $table->string('foreign_po_sa_number')->nullable();
            $table->string('foreign_mobile_phone')->nullable();
            $table->string('foreign_passport_number')->nullable();

            // Company/Organization information
            $table->string('company_name')->nullable();
            $table->string('company_region')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_kebele')->nullable();
            $table->string('company_house_number')->nullable();
            $table->string('company_po_sa_number')->nullable();
            $table->string('company_mobile_phone')->nullable();

            // Purchase details
            $table->integer('number_of_shares')->nullable();
            $table->decimal('total_price', 15, 2)->nullable();

            // Confirmation and signature
            $table->string('source_of_info')->nullable();
            $table->string('buyer_signature')->nullable();
            $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('share_applications');
    }
};
