@extends('main')

@section('title', 'Search a book')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Search a book</h3>
        </div>
        <div class="card-body">
            <form method="get">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" 
                        @if(isset($title)) value='{{ $title }}' @endif 
                        class="form-control" 
                        name="title" 
                        id="title"
                    >
                </div>
    
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text"`
                        @if(isset($author)) value='{{ $author }}' @endif 
                        class="form-control" 
                        name="author" 
                        id="author"
                    >
                </div>
    
                <input type="submit" value= "Search" class="btn btn-success">
    
            </form>
            
            <hr>

            @if(isset($books))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Price</td>
                            <td>Add</td>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->price }}</td>
                                <td> --- </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
