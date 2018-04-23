<?php

use Illuminate\Database\Seeder;
use Hashids\Hashids;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      /* User seeding */
      $email = "tittuhpd@gmail.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Tittu',
          'last_name' => 'Varghese',
          'email' => $email,
          'password' => bcrypt('Guesswhot@2'),
          'account_type' => 'User',
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);

    
      /* Business Seeding */
      $email = "stanly123@servntire.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Tittu',
          'last_name' => 'Varghese',
          'account_type' => 'Business',
          'email' => $email,
          'password' => bcrypt('Guesswhot@2'),
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);

      /* Admin Seeding */
      $email = "tittu@servntire.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Tittu',
          'last_name' => 'Varghese',
          'email' => $email,
          'password' => bcrypt('Guesswhot@2'),
          'account_type' => 'Admin',
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);      
      

    }


}
