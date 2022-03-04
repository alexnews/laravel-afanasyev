<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'     => 'Unknown Author',
                'email'    => 'unknown@aphorism.ru',
                'password' => bcrypt('12345'),
            ],
            [
                'name'     => 'Author',
                'email'    => 'author@aphorism.ru',
                'password' => bcrypt('123123'),          
            ],
        ];
        DB:: table('users') -> insert($data);
    }
}
