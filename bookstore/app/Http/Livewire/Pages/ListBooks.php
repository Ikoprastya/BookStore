<?php

namespace App\Http\Livewire\Pages;

use App\Models\Book;
use Livewire\Component;

class ListBooks extends Component
{
    public $select = 10;
    public $item;
    public $searchField;

    public function search()
    {
        $this->item = Book::where('bookName', 'LIKE', "%$this->searchField%")->orWhere('authorName', 'LIKE', "%$this->searchField%")->get(); // replace with your own item model and column name

        return redirect()->back()->with(['item' => $this->item]);;
    }

    public function render()
    {

        if ($this->select == 10) {
            # code...
            $books = Book::orderBy('averageRating','desc')->take(10)->get();
        } elseif ($this->select == 20) {
            $books = Book::orderBy('averageRating','desc')->take(20)->get();
            # code...
        } elseif ($this->select == 30) {
            $books = Book::orderBy('averageRating','desc')->take(30)->get();
            # code...
        } elseif ($this->select == 40) {
            $books = Book::orderBy('averageRating','desc')->take(40)->get();
            # code...
        } elseif ($this->select == 50) {
            $books = Book::orderBy('averageRating','desc')->take(50)->get();
            # code...
        } elseif ($this->select == 60) {
            $books = Book::orderBy('averageRating','desc')->take(60)->get();
            # code...
        } elseif ($this->select == 70) {
            $books = Book::orderBy('averageRating','desc')->take(70)->get();
            # code...
        } elseif ($this->select == 80) {
            $books = Book::orderBy('averageRating','desc')->take(80)->get();
            # code...
        } elseif ($this->select == 90) {
            $books = Book::orderBy('averageRating','desc')->take(90)->get();
            # code...
        } elseif ($this->select == 100) {
            $books = Book::orderBy('averageRating','desc')->take(100)->get();
            # code...
        }

        dd($books);

        return view('livewire..pages.list-books');
    }
}
