<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $importedComics = config("comics");

        foreach ($importedComics as $element) {
            
            $newComic = new Comic();
            $newComic->title = $element["title"];
            $newComic->description = $element["description"];
            $newComic->thumb = $element["thumb"];
            $newComic->price = $element["price"];
            $newComic->series = $element["series"];
            $newComic->sale_date = $element["sale_date"];
            $newComic->type = $element["type"];

            $newComic->save();

        }

    }
}
