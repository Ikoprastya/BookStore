<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use Livewire\Component;

class ListBooks extends Component
{
    public $perPage = 10;
    public $books;
    public $bookss;

    public $search = '';

    public function render()
    {
        $this->books = Book::orderBy('averageRating','desc')->where('bookName', 'LIKE', "%$this->search%")->orWhere('authorName', 'LIKE', "%$this->search%")->take($this->perPage)->get();

        return view('livewire..pages.list-books', [
            'books' => $this->books,
        ]);
    }
}
