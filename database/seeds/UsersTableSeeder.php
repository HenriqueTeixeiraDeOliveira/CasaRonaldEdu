<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        create(User::class, ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'password' => bcrypt('123123')]);
        create(User::class, ['name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'password' => bcrypt('123123')]);
        create(User::class, ['name' => 'Maria Silva', 'email' => 'maria.silva@example.com', 'password' => bcrypt('123123')]);
        create(User::class, ['name' => 'João Silva', 'email' => 'joao.silva@example.com', 'password' => bcrypt('123123')]);
    }
}
