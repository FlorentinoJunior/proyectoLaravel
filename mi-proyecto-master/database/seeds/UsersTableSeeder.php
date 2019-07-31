<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juan.roco.aguirre@ciisa.cl',
            'password' => bcrypt('Mystery.0000')
        ]);
    }
}
