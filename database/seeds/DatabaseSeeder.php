<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('loans')->delete();
        DB::table('books')->delete();
        DB::table('dvds')->delete();
        DB::table('users')->delete();
        DB::table('tags')->delete();
        DB::table('taggables')->delete();

        $this->call(TagsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(DvdsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LoansTableSeeder::class);
    }
}
