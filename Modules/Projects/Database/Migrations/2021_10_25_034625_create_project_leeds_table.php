<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectLeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_leeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id')->nullable();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('title');
            $table->text('project_brief');
            $table->text('file');
            $table->text('status');
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
        Schema::dropIfExists('project_leeds');
    }
}
