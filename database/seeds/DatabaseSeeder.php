<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        factory(\App\Models\BlogPost::class,100)->create();
//        $factory->define(\App\Models\BlogPost::class, function(Faker $faker));
    }
}
