<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 10) as $i) {
            $name = $faker->name;
            User::create([
               'name' => $name,
                'email' => $faker->email,
               'avatar' => 'avatar@adorable.io.png',
               'password'=> bcrypt('123')
            ]);
        }
    }
}
