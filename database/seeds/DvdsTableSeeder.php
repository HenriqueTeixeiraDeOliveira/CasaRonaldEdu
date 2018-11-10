<?php

use Illuminate\Database\Seeder;
use App\Dvd;

class DvdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        create(Dvd::class, ['title' => 'Titanic']);
        create(Dvd::class, ['title' => 'Vingadores']);
        create(Dvd::class, ['title' => 'Tarzan']);
        create(Dvd::class, ['title' => 'Rei Leão']);
    }
}
