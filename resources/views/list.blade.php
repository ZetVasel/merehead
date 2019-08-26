<div class="links">
        <a href="{{'/'}}">Main</a>
        <a href="{{'add'}}">Add Books</a>
        <a href="{{'list'}}">List of Books</a>
</div>

<h1>List of Books</h1>

<div>
    @foreach($books as $book)
        <p>Author -> {{$book->author}}</p>
        <p>Title -> {{$book->title}}</p>
        <p>Pages -> {{$book->pages}}</p>
        <p>Description -> {{$book->description}}</p>
        <p>Image -> <img src="{{$book->images}}"></p>
            <hr>
        @endforeach
</div>