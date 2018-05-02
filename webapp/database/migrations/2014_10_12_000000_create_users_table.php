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
            $table->string('password',250);
            $table->string('account_type',20);
            $table->text('eth_key')->nullable();
            //stats for analytics
            $table->string('country',24)->nullable();
            $table->string('state', 100)->nullable();    
            $table->date('dob',100)->nullable();            
            //stats for analytics

            //stats for wallet
            $table->boolean('is_wallet_linked')->default(false);
            $table->text('wallet_address')->nullable();       
            //stats for wallet

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
