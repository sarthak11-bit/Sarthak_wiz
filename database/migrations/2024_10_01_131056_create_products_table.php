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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('supplier_name');
            $table->string('supplier_phone');
            $table->string('supplier_address');
            $table->string('transporter_name');
            $table->string('transporter_phone');
            $table->string('vehicle_number');
            $table->string('vehicle_type');
            $table->string('material_type');
            $table->string('material_unit');
            $table->string('machine_type');
            $table->string('machine_number');
            $table->string('diesel_capacity');
            $table->enum('owned_or_rental', ['owned', 'rental']);
            $table->string('site_address');
            $table->string('site_name');
            $table->string('site_id');
            $table->string('site_manager');
            $table->string('site_login_password');
            $table->string('product_select');
            $table->integer('product_quantity');
            $table->string('employee_name');
            $table->string('employee_designation');
            $table->string('employee_phone');
            $table->string('assign_site');
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
        Schema::dropIfExists('products');
    }
};
