@extends('layouts.app')

@section('content')

<div class="container">

    <div class="title-wrapper py-5">
        <h1 class="mb-3">
            my library
        </h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">
            Crea nuovo 
        </a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">isbn_code</th>
                <th scope="col">title</th>
                <th scope="col">main author</th>
                <th scope="col">pages</th>
                <th scope="col">is available</th>
                <th scope="col">copies</th>
                <th scope="col">created</th>
                <th scope="col">deleted</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
    
        <tbody>
    
            @foreach ($books as $key=>$book)
    
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn_code }}</td>
                <td><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></td>
                <td>{{ $book->main_author }}</td>
                <td>{{ $book->pages }}</td>
                <td>{{ $book->isAvailable }}</td>
                <td>{{ $book->copies }}</td>
                <td>{{ $book->created_at->format('Y-m-d') }}</td>
                <td>{{ $book->trashed() ? $book->delete_at->format('Y-m-d') : '' }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-secondary btn-sm">edit</a>
                    <a href="" class="btn btn-secondary btn-sm">delete</a>
                    <a href="" class="btn btn-secondary btn-sm">restore</a>
                </td>
            </tr>
                
            @endforeach
    
        </tbody>
        
    </table>

</div>


    
@endsection