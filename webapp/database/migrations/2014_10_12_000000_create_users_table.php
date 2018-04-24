<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id',10)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100)->unique();
            $table->text('profile_image')->nullable();
            $table->string('phone_number',14)->nullable();
            $table->string('country',24)->nullable();
            $table->string('password',250);
            $table->string('account_type',20);
            $table->string('company_name',100)->nullable();
            $table->string('company_email',100)->nullable();
            $table->string('company_website',100)->nullable();
            $table->string('company_location',100)->nullable();
            $table->string('interested_in',50)->nullable();
            $table->string('applications_per_month',50)->nullable();
            $table->boolean('profile_status')->default(false);
            $table->boolean('verified')->default(false);
            $table->string('verification_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
