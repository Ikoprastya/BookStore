<div class="container">
        <!-- START FORM -->
        <div class="relative mb-4 row d-flex flex-column">
            <div class="my-3 col">
                <label for="residence" class="leading-7 text-sm text-gray-600">List shown : </label>
                <select wire:model="perPage" wire:change="render">
                    @for ($i = 10; $i <= 100; $i += 10)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-3 col ">
                <form>
                    <label for="residence" class="leading-7 text-sm text-gray-600">Search : </label>
                    <input type="text" wire:model='search'><br>
                </form>
            </div>
        </div>

         <div class="my-3 p-3 bg-body rounded shadow-sm">

                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th class="col-md-1">No</th>
                             <th class="col-md-2">Book Name</th>
                             <th class="col-md-2">Category Name</th>
                             <th class="col-md-2 ">Author Name</th>
                             <th class="col-md-2">Average Rating</th>
                             <th class="col-md-2">Voter</th>
                         </tr>
                     </thead>
                     <tbody>
                        @if ($books->count() != 0)

                        @foreach ($books as $item => $book)
                        <tr>
                           <td>{{ $item+1 }}</td>
                            <td>{{ $book->bookName }}</td>
                            <td>{{ $book->categoryName }}</td>
                            <td>{{ $book->authorName }}</td>
                            <td>{{ $book->averageRating }}</td>
                            <td>{{ $book->voter }}</td>
                        </tr>
                        @endforeach

                        @else

                    @endif
                     </tbody>
                 </table>
           </div>

           {{-- {{$search}} --}}
</div>
