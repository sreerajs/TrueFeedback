<?php

use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AttachRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* User Role Seeder */
      $role = DB::table('roles')->where('name','=','User')->first();

      $user = User::where('email', '=', 'tittuhpd@gmail.com')->first();
      $user->attachRole($role->id);

      /* Admin Role Seeder */
      $role = DB::table('roles')->where('name','=','Business')->first();

      $user = User::where('email', '=', 'stanly123@servntire.com')->first();
      $user->attachRole($role->id);

      /* Admin Role Seeder */
      $role = DB::table('roles')->where('name','=','admin')->first();

      $user = User::where('email', '=', 'tittu@servntire.com')->first();
      $user->attachRole($role->id);
    }
}
