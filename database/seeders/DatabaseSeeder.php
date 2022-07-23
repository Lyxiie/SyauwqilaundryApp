<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Layanan;
use App\Models\Pesanan;
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
            'nama_layanan' => 'Regular',
            'harga_layanan' => '3000',
            'waktu' => '3'
        ]);
        Layanan::create([
            'id_layanan' => '002',
            'nama_layanan' => 'Quick',
            'harga_layanan' => '5000',
            'waktu' => '2'
        ]);
        Layanan::create([
            'id_layanan' => '003',
            'nama_layanan' => 'Express',
            'harga_layanan' => '7000',
            'waktu' => '1'
        ]);

        Pesanan::create([
            'id_pesanan' => '001',
            'nama' => 'Muhamad',
            'no_hp' => '089123443212',
            'layanan' => '1',
            'jml_satuan' => '3',
            'tgl_masuk' => '2022-07-23',
            'tgl_selesai' => '2022-07-24',
            'total' => '21000'
        ]);
        Pesanan::create([
            'id_pesanan' => '002',
            'nama' => 'Ridwan',
            'no_hp' => '089111098897',
            'layanan' => '2',
            'jml_satuan' => '4',
            'tgl_masuk' => '2022-07-23',
            'tgl_selesai' => '2022-07-25',
            'total' => '20000'
        ]);
        Pesanan::create([
            'id_pesanan' => '003',
            'nama' => 'Muhamad Ridwan',
            'no_hp' => '089996766611',
            'layanan' => '3',
            'jml_satuan' => '5',
            'tgl_masuk' => '2022-07-23',
            'tgl_selesai' => '2022-07-26',
            'total' => '15000'
        ]);
        Pesanan::create([
            'id_pesanan' => '004',
            'nama' => 'M Ridwan',
            'no_hp' => '089995566611',
            'layanan' => '3',
            'jml_satuan' => '6',
            'tgl_masuk' => '2022-07-23',
            'tgl_selesai' => '2022-07-26',
            'total' => '18000'
        ]);

        User::factory(3)->create();

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
