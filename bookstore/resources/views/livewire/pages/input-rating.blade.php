<div class="container">
    <!-- START FORM -->
    <div class="relative mb-4 row d-flex flex-column">
        <form wire:submit.prevent='submit'>
            <div class="m-3 col">
                <label for="residence" class="leading-7 text-sm text-gray-600">Book Author : </label>
                <select name="category_id" class="px-md-4 ms-1">
                    @foreach ($books as $book)
                        <option value="{{ $book->authorName }}">
                            {{ $book->authorName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="m-3 col">
                <label for="residence" class="leading-7 text-sm text-gray-600">Book Name : </label>
                <select name="category_id" class="px-md-4 ms-1">
                    @foreach ($books as $book)
                        <option value="{{ $book->bookName }}">
                            {{ $book->bookName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="m-3 col">
                <label for="residence" class="leading-7 text-sm text-gray-600">Rating : </label>
                <select name="number" class="px-md-5 ms-5">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
                <input type="submit" class="px-3">
        </form>

    </div>


</div>
