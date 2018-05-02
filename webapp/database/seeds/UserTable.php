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
      $email = "truefeedback@user.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Tittu',
          'last_name' => 'Varghese',
          'email' => $email,
          'password' => bcrypt('Stanly123'),
          'account_type' => 'User',
          'dob' => '1995-05-12',
          'country' => 'India',
          'state' => 'Kerala',
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);

    
      /* Business Seeding */
      $email = "truefeedback@bus.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Tittu',
          'last_name' => 'Varghese',
          'account_type' => 'Business',
          'dob' => '1995-05-12',
          'country' => 'India',
          'state' => 'Kerala',
          'email' => $email,
          'password' => bcrypt('Stanly123'),
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);

      /* Admin Seeding */
      $email = "stanly@servntire.com";
      $hashids = new Hashids($email,9);

      DB::table('users')->insert([
          'user_id' => $hashids->encode(rand(1,9999)),
          'first_name' => 'Stanly',
          'last_name' => 'Johnson',
          'email' => $email,
          'password' => bcrypt('Stanly123'),
          'account_type' => 'Admin',
          'dob' => '1995-05-12',
          'country' => 'India',
          'state' => 'Kerala',
          'verified' => 1,
          'verification_token' => $hashids->encode(rand(1,9999)),
      ]);      
      

    }


}
