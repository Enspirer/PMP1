<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('category_id')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->text('user_id');
            $table->text('status');            
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
        Schema::dropIfExists('tallents');
    }
}
