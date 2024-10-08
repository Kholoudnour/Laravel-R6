<?php

namespace Database\Seeders;

use App\Models\car;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // car::factory(10 )->create();
        //  User::factory(10)->create();

        // User::factory()->create([
        //         // 'name' => 'Test User',
        //         // 'email' => 'test@example.com',
        // ]);
        // Product::factory(10)->create();
        // Student::factory(10)->create();
        // user::factory(10)->create();
        // Category::factory(10)->create();
         car::factory(5)->create(); 
    }
}
