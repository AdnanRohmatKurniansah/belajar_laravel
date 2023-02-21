<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


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
            'name' => 'Adnan Rohmat Kurniansah',
            'username' => 'bandot',
            'email' => 'atnandimas@gmail.com',
            'password' => bcrypt('12345')     
        ]);
        User::create([
            'name' => 'Buyung',
            'username' => 'bushbush',
            'email' => 'buyung@gmail.com',
            'password' => bcrypt('12345')     
        ]);
        User::create([
            'name' => 'kurni',
            'username' => 'ak47',
            'email' => 'kurni@gmail.com',
            'password' => bcrypt('12345')     
        ]);
        Category::create([
            'name' => 'School',
            'slug' => 'school'
        ]);
        Category::create([
            'name' => 'Beach',
            'slug' => 'beach'
        ]);
        Category::create([
            'name' => 'Mountain',
            'slug' => 'mountain'
        ]);
        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 2,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 3,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 1,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kelima',
            'category_id' => 3,
            'slug' => 'judul-kelima',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Keenam',
            'category_id' => 3,
            'slug' => 'judul-keenam',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketujuh',
            'category_id' => 1,
            'slug' => 'judul-ketujuh',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 3
        ]);
        Post::create([
            'title' => 'Judul Kedelapan',
            'category_id' => 2,
            'slug' => 'judul-kedelapan',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Kesembilan',
            'category_id' => 1,
            'slug' => 'judul-kesembilan',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kesepuluh',
            'category_id' => 2,
            'slug' => 'judul-kesepuluh',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, architecto?',
            'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus fuga vitae eius doloribus blanditiis repudiandae nobis quia necessitatibus, quis eligendi soluta unde itaque? Magnam, perferendis? Non molestiae autem itaque modi.Modi, illo commodi officiis doloremque corporis exercitationem quidem atque sint ipsa quas debitis laborum inventore cupiditate, hic amet? Tempora harum ducimus distinctio, vel hic eos. Molestiae, perferendis. Expedita perferendis quam nemo id minima maiores repellendus voluptates aliquam ducimus dignissimos. Fugit, cupiditate qui.</p>',
            'user_id' => 3
        ]);
        
    }
}