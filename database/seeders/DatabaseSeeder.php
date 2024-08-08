<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

                User::create([
                    'name' => 'Dede',
                    'username' => 'DedE aRI aSYAHPUTRA',
                    'email' => 'dedeari006@gmail.com',
                    'password' =>bcrypt('12345')
                ]);

        // User::create([
        //     'name' => 'Kimmich',
        //     'email' => 'kimmich28@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

            User::factory(3)->create();

                Category::create([
                    'name' => "Web Programming",
                    'slug' => "Web-programming"
                ]);
                    Category::create([
                    'name' => "Web Design",
                    'slug' => "Web-Design"
                ]); 
                        category::create([
                        'name' => "Personal",
                        'slug' => "Personal"
                    ]);

                Post::factory(20)->create();

                // Post::create([
                //     'title' => 'Judul Pertama',
                //     'slug' => 'Judul-pertama',
                //     'excerpt' => 'Adolf Hitler adalah',
                //     'body'=> 'seorang politisi Jerman dan ketua Partai Nazi (bahasa Jerman: Nationalsozialistische Deutsche Arbeiterpartei (NSDAP); Partai Pekerja Jerman Sosialis Nasional) kelahiran Austria. Ia menjabat sebagai Kanselir Jerman sejak 1933 sampai 1945 dan diktator Jerman Nazi (bergelar Führer und Reichskanzler) mulai tahun 1934 sampai 1945. Hitler menjadi tokoh utama Jerman Nazi, Perang Dunia II di Eropa, dan Holocaust.',
                //     'category_id' => 1,
                //     'user_id' => 1
                // ]);

                // Post::create([
                //     'title' => 'Judul Kedua',
                //     'slug' => 'Judul-kedua',
                //     'excerpt' => 'Adolf Hitler adalah',
                //     'body' => 'seorang politisi Jerman dan ketua Partai Nazi (bahasa Jerman: Nationalsozialistische Deutsche Arbeiterpartei (NSDAP); Partai Pekerja Jerman Sosialis Nasional) kelahiran Austria. Ia menjabat sebagai Kanselir Jerman sejak 1933 sampai 1945 dan diktator Jerman Nazi (bergelar Führer und Reichskanzler) mulai tahun 1934 sampai 1945. Hitler menjadi tokoh utama Jerman Nazi, Perang Dunia II di Eropa, dan Holocaust.',
                //     'category_id' => 1,
                //     'user_id' => 2
                // ]);

                //     Post::create([
                //         'title' => 'Judul ketiga',
                //         'slug' => 'Judul-ketiga',
                //         'excerpt' => 'Adolf Hitler adalah',
                //         'body' => 'seorang politisi Jerman dan ketua Partai Nazi (bahasa Jerman: Nationalsozialistische Deutsche Arbeiterpartei (NSDAP); Partai Pekerja Jerman Sosialis Nasional) kelahiran Austria. Ia menjabat sebagai Kanselir Jerman sejak 1933 sampai 1945 dan diktator Jerman Nazi (bergelar Führer und Reichskanzler) mulai tahun 1934 sampai 1945. Hitler menjadi tokoh utama Jerman Nazi, Perang Dunia II di Eropa, dan Holocaust.',
                //         'category_id' => 1,
                //         'user_id' => 1
                //     ]);



            }

}
