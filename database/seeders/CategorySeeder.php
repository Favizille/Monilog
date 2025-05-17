<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::factory()->create();
        
        $categories = ["Salary", "Food", "Rent"];

        foreach ($categories as $name) {
            Category::firstOrCreate(["name" => $name, "user_id" => $user->id]);
        }
    }
}
