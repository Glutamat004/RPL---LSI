<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\University;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'nim' => 'G6401201120',
            'password' => bcrypt('12345678'),
            'nomorhp' => '089876543',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);
        Category::create([
            'name' => 'Writing',
            'slug' => 'writing',
        ]);
        Category::create([
            'name' => 'Translation',
            'slug' => 'translation',
        ]);
        Category::create([
            'name' => 'Music',
            'slug' => 'music',
        ]);
        Post::factory(10)->create();
        
    }
}
