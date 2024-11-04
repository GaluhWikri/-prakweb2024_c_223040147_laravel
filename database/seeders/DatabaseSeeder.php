<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//         $galuh = User::factory()->create([
//             'name' => 'Galuh',
//             'username' => 'User',
//             'email' => 'test@example.com',
//             'email_verified_at' => now(),
//             'password' => hash::make('password'),
//             'remember_token' => str::random(10),
//         ]);
//         Category::create([
//             'name' => 'Web Design',
//             'slug' => 'web-design'
//         ]);
//         Post::create([
//             'title' => 'Judul Artikel 1',
//             'author_id' => 1,
//             'category_id' => 1,
//             'slug' => 'judul-artikel-1',
//             'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident corrupti excepturi aut dicta. Quisquam magnam fuga tempore. Sunt deserunt ea modi quaerat hic, eveniet, qui soluta porro nulla, voluptate enim.'
//         ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
