<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulting_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('company_name');
            $table->text('email');
            $table->text('telephone');
            $table->text('project_brief');
            $table->text('appointment_date_time');
            $table->text('additional_notes')->nullable();
            $table->text('user_id')->nullable();
            $table->text('status')->default(0)->comment('0 is unreaded');
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
        Schema::dropIfExists('consulting_requests');
    }
}
