<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'type' => 'admin',
            ]);

        factory(User::class)->create([
            'name' => 'Normal User',
            'email' => 'normal@normal.com',
            'password' => Hash::make('123456')
            ]);    
    }
}
