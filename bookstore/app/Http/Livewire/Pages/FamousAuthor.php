<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use Livewire\Component;

class FamousAuthor extends Component
{
    public $famous;
    public function render()
    {
        $this->famous = Book::where('voter', '>', 5)->orderBy('voter','desc')->take(10)->get();
        return view('livewire..pages.famous-author');
    }
}
