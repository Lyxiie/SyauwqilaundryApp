<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Layanan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' =>'Muhamad',
            'username' => 'ridwan',
            'number' => '09876',
            'city' => 'Bandung',
            'province' => 'Jabar',
            'is_admin' => true,
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password')
        ]);
        Layanan::create([
            'id_layanan' => '001',
            'nama_layanan' => 'Quick',
            'harga_layanan' => '10000',
            'waktu' => '3'
        ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Design',
            'slug'=>'design'
        ]);

        Category::create([
            'name'=>'Game',
            'slug'=>'game'
        ]);


        Post::factory(30)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nam harum rerum. Doloremque quas, molestias labore ullam porro, tempore, aspernatur voluptatibus natus repellat molestiae aperiam adipisci odio ex. Possimus iure ab libero doloribus debitis facilis reiciendis repellendus hic illum veniam ad, exercitationem vel officia autem rerum deserunt animi quas tenetur aspernatur in maxime labore quibusdam. Tempora neque beatae commodi dicta. Sapiente, neque consequatur veritatis ut asperiores temporibus nobis doloremque ipsa omnis quam nihil accusantium nesciunt tempore voluptatibus dolorum. Eligendi eius ad autem explicabo natus corrupti odit veritatis iste, tempore voluptas a alias eveniet, commodi molestias dolore provident quisquam. Qui, provident.',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nam harum rerum. Doloremque quas, molestias labore ullam porro, tempore, aspernatur voluptatibus natus repellat molestiae aperiam adipisci odio ex. Possimus iure ab libero doloribus debitis facilis reiciendis repellendus hic illum veniam ad, exercitationem vel officia autem rerum deserunt animi quas tenetur aspernatur in maxime labore quibusdam. Tempora neque beatae commodi dicta. Sapiente, neque consequatur veritatis ut asperiores temporibus nobis doloremque ipsa omnis quam nihil accusantium nesciunt tempore voluptatibus dolorum. Eligendi eius ad autem explicabo natus corrupti odit veritatis iste, tempore voluptas a alias eveniet, commodi molestias dolore provident quisquam. Qui, provident.',
        //     'category_id'=> 2,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=> 'Judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nam harum rerum. Doloremque quas, molestias labore ullam porro, tempore, aspernatur voluptatibus natus repellat molestiae aperiam adipisci odio ex. Possimus iure ab libero doloribus debitis facilis reiciendis repellendus hic illum veniam ad, exercitationem vel officia autem rerum deserunt animi quas tenetur aspernatur in maxime labore quibusdam. Tempora neque beatae commodi dicta. Sapiente, neque consequatur veritatis ut asperiores temporibus nobis doloremque ipsa omnis quam nihil accusantium nesciunt tempore voluptatibus dolorum. Eligendi eius ad autem explicabo natus corrupti odit veritatis iste, tempore voluptas a alias eveniet, commodi molestias dolore provident quisquam. Qui, provident.',
        //     'category_id'=> 2,
        //     'user_id'=> 2
        // ]);
    }
}
