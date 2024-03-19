<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        Post::factory(100)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yuma Aji Pangestu',
        //     'email' => 'yuma@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Joko Waludin',
        //     'email' => 'jokowaludin@gmail.com',
        //     'password' => bcrypt('345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'UI/UX Designer',
            'slug' => 'ui-ux-designer',
        ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Postingan Pertama',
        //     'slug'=> 'judul-postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel consequatur impedit cumque velit tempore! Cupiditate tempore dicta quidem doloremque magnam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ea ab illum similique eius laboriosam molestiae laudantium. Eius, beatae minus laborum tenetur omnis repellendus nisi officiis perspiciatis dolores tempora quidem vitae ea impedit placeat rem dignissimos? Vitae, consectetur distinctio aperiam nobis inventore numquam nemo, autem quidem quo molestiae sequi magni!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptate, aspernatur temporibus vitae magnam ab impedit est incidunt, facere veritatis officiis, deserunt earum quaerat nulla sapiente molestiae! Alias unde necessitatibus inventore aut et placeat tempore quis beatae molestias perspiciatis hic maxime esse corporis amet nobis sit, nulla est voluptates pariatur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, laborum aliquid, inventore dolorum id fugit ad quisquam rem at enim magni quae. Voluptas architecto placeat aliquid ut nesciunt nulla iste, voluptate distinctio modi officia error, exercitationem eligendi cum, tenetur deleniti vero? Laboriosam numquam quae nihil, amet ad voluptatem maiores ex animi totam saepe iure reprehenderit iste unde voluptas esse architecto?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Postingan Kedua',
        //     'slug'=> 'judul-postingan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel consequatur impedit cumque velit tempore! Cupiditate tempore dicta quidem doloremque magnam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ea ab illum similique eius laboriosam molestiae laudantium. Eius, beatae minus laborum tenetur omnis repellendus nisi officiis perspiciatis dolores tempora quidem vitae ea impedit placeat rem dignissimos? Vitae, consectetur distinctio aperiam nobis inventore numquam nemo, autem quidem quo molestiae sequi magni!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptate, aspernatur temporibus vitae magnam ab impedit est incidunt, facere veritatis officiis, deserunt earum quaerat nulla sapiente molestiae! Alias unde necessitatibus inventore aut et placeat tempore quis beatae molestias perspiciatis hic maxime esse corporis amet nobis sit, nulla est voluptates pariatur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, laborum aliquid, inventore dolorum id fugit ad quisquam rem at enim magni quae. Voluptas architecto placeat aliquid ut nesciunt nulla iste, voluptate distinctio modi officia error, exercitationem eligendi cum, tenetur deleniti vero? Laboriosam numquam quae nihil, amet ad voluptatem maiores ex animi totam saepe iure reprehenderit iste unde voluptas esse architecto?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'title' => 'Judul Postingan Ketiga',
        //     'slug'=> 'judul-postingan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel consequatur impedit cumque velit tempore! Cupiditate tempore dicta quidem doloremque magnam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ea ab illum similique eius laboriosam molestiae laudantium. Eius, beatae minus laborum tenetur omnis repellendus nisi officiis perspiciatis dolores tempora quidem vitae ea impedit placeat rem dignissimos? Vitae, consectetur distinctio aperiam nobis inventore numquam nemo, autem quidem quo molestiae sequi magni!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptate, aspernatur temporibus vitae magnam ab impedit est incidunt, facere veritatis officiis, deserunt earum quaerat nulla sapiente molestiae! Alias unde necessitatibus inventore aut et placeat tempore quis beatae molestias perspiciatis hic maxime esse corporis amet nobis sit, nulla est voluptates pariatur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, laborum aliquid, inventore dolorum id fugit ad quisquam rem at enim magni quae. Voluptas architecto placeat aliquid ut nesciunt nulla iste, voluptate distinctio modi officia error, exercitationem eligendi cum, tenetur deleniti vero? Laboriosam numquam quae nihil, amet ad voluptatem maiores ex animi totam saepe iure reprehenderit iste unde voluptas esse architecto?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Postingan Keempat',
        //     'slug'=> 'judul-postingan-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel consequatur impedit cumque velit tempore! Cupiditate tempore dicta quidem doloremque magnam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ea ab illum similique eius laboriosam molestiae laudantium. Eius, beatae minus laborum tenetur omnis repellendus nisi officiis perspiciatis dolores tempora quidem vitae ea impedit placeat rem dignissimos? Vitae, consectetur distinctio aperiam nobis inventore numquam nemo, autem quidem quo molestiae sequi magni!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptate, aspernatur temporibus vitae magnam ab impedit est incidunt, facere veritatis officiis, deserunt earum quaerat nulla sapiente molestiae! Alias unde necessitatibus inventore aut et placeat tempore quis beatae molestias perspiciatis hic maxime esse corporis amet nobis sit, nulla est voluptates pariatur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, laborum aliquid, inventore dolorum id fugit ad quisquam rem at enim magni quae. Voluptas architecto placeat aliquid ut nesciunt nulla iste, voluptate distinctio modi officia error, exercitationem eligendi cum, tenetur deleniti vero? Laboriosam numquam quae nihil, amet ad voluptatem maiores ex animi totam saepe iure reprehenderit iste unde voluptas esse architecto?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Postingan Kelima',
        //     'slug'=> 'judul-postingan-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel consequatur impedit cumque velit tempore! Cupiditate tempore dicta quidem doloremque magnam.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ea ab illum similique eius laboriosam molestiae laudantium. Eius, beatae minus laborum tenetur omnis repellendus nisi officiis perspiciatis dolores tempora quidem vitae ea impedit placeat rem dignissimos? Vitae, consectetur distinctio aperiam nobis inventore numquam nemo, autem quidem quo molestiae sequi magni!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut voluptate, aspernatur temporibus vitae magnam ab impedit est incidunt, facere veritatis officiis, deserunt earum quaerat nulla sapiente molestiae! Alias unde necessitatibus inventore aut et placeat tempore quis beatae molestias perspiciatis hic maxime esse corporis amet nobis sit, nulla est voluptates pariatur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, laborum aliquid, inventore dolorum id fugit ad quisquam rem at enim magni quae. Voluptas architecto placeat aliquid ut nesciunt nulla iste, voluptate distinctio modi officia error, exercitationem eligendi cum, tenetur deleniti vero? Laboriosam numquam quae nihil, amet ad voluptatem maiores ex animi totam saepe iure reprehenderit iste unde voluptas esse architecto?</p>'
        // ]);


    }
}
