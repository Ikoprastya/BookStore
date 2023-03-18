<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use Livewire\Component;

class FamousAuthor extends Component
{
    public function render()
    {
        $famous = Book::where('voter', '>', 5)->orderBy('voter','desc')->take(10)->get();
        dd($famous);
        return view('livewire..pages.famous-author');
    }
}
