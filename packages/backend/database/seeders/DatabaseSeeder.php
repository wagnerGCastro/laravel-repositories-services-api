<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user =  
            [
                'first_name' => 'Wagner',
                'last_name' => 'Castro',
                'login' => 'wagner.castro',
                'email' => 'wagner.castro@teste.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]
        ;

        \App\Models\User::create($user);

        \App\Models\User::factory(10)->create();
        // \App\Models\Menu::factory()->create();
        // \App\Models\Permission::factory()->create();
        // \App\Models\Post::factory(30)->create();
    }
}
