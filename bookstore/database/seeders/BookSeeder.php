<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/books.json');
        $books = json_decode($json, true);

        foreach ($books as $book) {
            Book::query()->updateOrCreate([
                'bookName' => $book['bookName'],
                'categoryName' => $book['categoryName'],
                'authorName' => $book['authorName'],
                'averageRating' => $book['averageRating'],
                'voter' => $book['voter'],
            ]);
        }
    }
}
