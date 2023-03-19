<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use Livewire\Component;

class InputRating extends Component
{
    public $books;

    public function submit(){
        return redirect()->route("listBook");
    }

    public function render()
    {
        $this->books = Book::all();
        return view('livewire..pages.input-rating');
    }
}
