@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <div class="container">
                            <h3 class="h3 text-center mt-5">Book List</h3>
                            <p class="text-center mt-4">Register, modify and delete your books</p>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordered table-striped">
                                <thead>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Synopsis</th>
                                    <th>Pages</th>
                                    <th>Edition</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @if($books->count())
                                    @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->synopsis }}</td>
                                        <td>{{ $book->pages }}</td>
                                        <td>{{ $book->edition }}</td>
                                        <td>{{ $book->price }}</td>
                                        <td><a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-primary btn-xs"></a></td>
                                        <td>
                                            <form action="{{ action('BookController@destroy', $book->id) }}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8">Book removed!</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('book.create') }}" class="btn btn-info mt-3 mb-5">Add Book</a>
                        </div>
                    </div>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection