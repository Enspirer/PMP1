<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEshopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eshop_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('product_name')->nullable();
            $table->text('category_id')->nullable();
            $table->text('user_id')->nullable();
            $table->text('description')->nullable();
            $table->text('company_name')->nullable();            
            $table->text('price')->nullable();
            $table->text('feature_image')->nullable();
            $table->text('images')->nullable();
            $table->text('product_details')->nullable();
            $table->text('demo_link')->nullable();
            $table->integer('demo_link_available')->nullable();
            $table->integer('customization_available')->nullable();
            $table->text('is_feature')->nullable();
            $table->text('status')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('eshop_products');
    }
}
