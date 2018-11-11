<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//--------------------------- USER ---------------------------//
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

//--------------------------- LOAN ---------------------------//

$factory->define(App\Loan::class, function (Faker $faker) {

    return [
        'user_id' => function() {
            return create(App\User::class)->id;
        },
        'loanable_id' =>  function() {
            return create(App\Book::class)->id;
        },
        'loanable_type' => 'book',
        'volunteer_before' => $faker->name,
        'volunteer_id_before' => $faker->numberBetween(1000,9999),
        'loaned_at' => Carbon::now()->toDateTimeString()
    ];
});

$factory->state(App\Loan::class, 'dvd', [
    'loanable_id' =>  function() {
        return create(App\Dvd::class)->id;
    },
    'loanable_type' => 'dvd',
]);

//--------------------------- BOOK ---------------------------//
$factory->define(App\Book::class, function (Faker $faker) {
    $genre = $faker->randomElement(['Literatura Infanto Juvenil','Romance']);
    if ($genre == 'Romance') {
        $library_id = "ROM" . $faker->numberBetween(100,999);
    } else {
        $library_id = "LIJ" . $faker->numberBetween(100,999);
    }
    return [
        'library_id' => $library_id,
        'title' => $faker->word,
        'genre' => $genre,
        'author' => $faker->name,
        'publisher' => $faker->randomElement(['Grupo Cultivar', 'Deriva']),
        'pages' => $faker->numberBetween(50,500),
        'x_position' => $faker->randomElement(['A','B','C','D','E','F','G','H']),
        'y_position' => $faker->numberBetween(1,4)
    ];
});

//--------------------------- DVD ---------------------------//
$factory->define(App\Dvd::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'type' => $faker->randomElement(['Adulto','Infantil']),
        'length' => $faker->numberBetween(1,3) . ":07"
    ];
});
