<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "test",
            'email' => "test@gmail.com",
            'password' => Hash::make("testtest"),
            'api_token' => Str::uuid(),
        ]);

        $category = Category::create(['name' => "a"]);
        $category = Category::create(['name' => "b"]);
        $category = Category::create(['name' => "c"]);
    }
}
