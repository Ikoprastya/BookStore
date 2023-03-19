<div>


    <h1 class="d-flex justify-content-center my-3">Top 10 Famous Author</h1>
     <div class="my-3 p-3 bg-body rounded shadow-sm">
             <table class="table table-bordered">
                 <tbody>
                    <tr>
                        <td>No</td>
                        <td>Author Name</td>
                        <td>Voter</td>
                    </tr>
                    @foreach ($famous as $item => $book)
                    <tr>
                       <td>{{ $item + 1 }}</td>
                       <td>{{ $book->authorName}}</td>
                       <td>{{ $book->voter}}</td>
                   </tr>
                    @endforeach
                 </tbody>
             </table>
       </div>
</div>
