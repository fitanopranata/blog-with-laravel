<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Fitano',
        //     'email' => 'fitanopranata@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Pranata',
        //     'email' => 'fitanopranata2@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga esse perferendis fugit corrupti enim excepturi eum maxime quasi quidem labore pariatur magnam, eius accusamus ratione nostrum, ut id nam consequatur in quas?</p><p>Facere iure repellat enim excepturi vero cum aut esse debitis culpa doloremque, fuga accusantium ipsam expedita cumque doloribus velit aspernatur molestiae eos quibusdam impedit suscipit necessitatibus at laudantium corporis! Quae quibusdam cumque expedita modi beatae error repellat veniam.</p><p>Facere nobis nam neque cupiditate tempore ratione. Dolorem necessitatibus obcaecati nemo, perferendis mollitia aspernatur vitae saepe assumenda dignissimos. Iure provident eius deleniti architecto soluta suscipit aspernatur cum rem optio nam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga esse perferendis fugit corrupti enim excepturi eum maxime quasi quidem labore pariatur magnam, eius accusamus ratione nostrum, ut id nam consequatur in quas?</p><p>Facere iure repellat enim excepturi vero cum aut esse debitis culpa doloremque, fuga accusantium ipsam expedita cumque doloribus velit aspernatur molestiae eos quibusdam impedit suscipit necessitatibus at laudantium corporis! Quae quibusdam cumque expedita modi beatae error repellat veniam.</p><p>Facere nobis nam neque cupiditate tempore ratione. Dolorem necessitatibus obcaecati nemo, perferendis mollitia aspernatur vitae saepe assumenda dignissimos. Iure provident eius deleniti architecto soluta suscipit aspernatur cum rem optio nam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga esse perferendis fugit corrupti enim excepturi eum maxime quasi quidem labore pariatur magnam, eius accusamus ratione nostrum, ut id nam consequatur in quas?</p><p>Facere iure repellat enim excepturi vero cum aut esse debitis culpa doloremque, fuga accusantium ipsam expedita cumque doloribus velit aspernatur molestiae eos quibusdam impedit suscipit necessitatibus at laudantium corporis! Quae quibusdam cumque expedita modi beatae error repellat veniam.</p><p>Facere nobis nam neque cupiditate tempore ratione. Dolorem necessitatibus obcaecati nemo, perferendis mollitia aspernatur vitae saepe assumenda dignissimos. Iure provident eius deleniti architecto soluta suscipit aspernatur cum rem optio nam!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();
    }
}
