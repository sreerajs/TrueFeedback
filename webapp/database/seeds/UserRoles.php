<?php

use Illuminate\Database\Seeder;
use App\Models\Role;


class UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $owner = new Role();
      $owner->name         = 'User';
      $owner->display_name = 'User without any privileges';
      $owner->description  = 'User without any privileges';
      $owner->save();

      $owner = new Role();
      $owner->name         = 'Business';
      $owner->display_name = 'Business User without any privileges';
      $owner->description  = 'Business User without any privileges';
      $owner->save();

      $owner = new Role();
      $owner->name         = 'admin';
      $owner->display_name = 'User without admin privileges';
      $owner->description  = 'User without admin privileges';
      $owner->save();

    }
}
