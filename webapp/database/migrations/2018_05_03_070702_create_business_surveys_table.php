<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_surveys', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('user_id');
            $table->char('name', 100);
            $table->text('survey_form');
            $table->integer('is_deployed')->default(0);
            $table->integer('is_deleted')->default(0);

            //deployment details
            $table->date('expiry_date')->nullable();
            $table->integer('reward')->nullable();
            $table->string('category',225)->nullable();
            $table->integer('max_responses')->nullable();
            $table->integer('min_responses')->nullable();

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
        Schema::dropIfExists('business_surveys');
    }
}
