<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRoles::class);
        $this->call(UserTable::class);
        $this->call(AttachRoles::class);
    }
}
