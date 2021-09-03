<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_profile_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('profile_name')->nullable();
            $table->text('profile_description')->nullable();
            $table->text('specialized_on')->nullable();
            $table->text('company_size')->nullable();
            $table->text('skills')->nullable();
            $table->text('license_and_certification')->nullable();
            $table->text('awards_badges')->nullable();
            $table->text('other_experties')->nullable();
            $table->text('client_reviews')->nullable();
            $table->text('user_id');
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
        Schema::dropIfExists('my_profile_details');
    }
}
