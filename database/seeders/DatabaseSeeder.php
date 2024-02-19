<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '12345678',
        //     'type' => '0',
        // ]);

        $user = [
            [
                "name"=> "Admin",
                'email'=> 'admin@admin.com',
                'type' => '1',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'User',
                'email'=> 'user@user.com',
                'type' => '0',
                'password' => bcrypt('1234'),
            ],
            [
                'name'=> 'Teacher',
                'email'=> 'teacher@teacher.com',
                'type' => '2',
                'password' => bcrypt('1234'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
