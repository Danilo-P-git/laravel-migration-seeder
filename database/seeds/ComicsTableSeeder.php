<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20 ; $i++) {
        $newComic = new Comic;
        $newComic->title = $faker->sentence(1, true);
        $newComic->author = $faker->name;
        $newComic->isbn = $faker->randomNumber(NULL, false);
        $newComic->genre = $faker->word;
        $newComic->edition = $faker->word;
        $newComic->pages = $faker->numberBetween(20, 400);
        $newComic->desc = $faker->text(100);
        $newComic->image = $faker->imageUrl(400, 300);
        $newComic->year = $faker->date('Y-m-d', 'now');
        $newComic->save();
      }

    }
}
