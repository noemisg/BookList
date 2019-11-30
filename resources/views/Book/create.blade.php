@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="container">
        <div class="col-md-12">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong>Check the required fields.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title h3 text-center mt-5">New Book</h3>
                    <p class="text-center mt-4">Register a new book</p>
                </div>
                <div class="panel-body">     
                    <div class="table-container">
                        <form method="POST" action="{{ route('book.store') }}"  role="form">
                            {{ csrf_field() }}
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1">
                                                <label class="title" for="title">Title</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1">
                                                <label class="author" for="author">Author</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="author" id="author" class="form-control input-sm" placeholder="Author">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1">
                                                <label class="edition" for="edition">Edition</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="edition" id="edition" class="form-control input-sm" placeholder="Edition">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1">
                                                <label class="pages" for="title">Pages</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="pages" id="pages" class="form-control input-sm" placeholder="Pages">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1">
                                                <label class="price" for="price">Price</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="price" id="price" class="form-control input-sm" placeholder="Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <label class="synopsis" for="synopsis">Synopsis</label>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-5">
                                                <textarea name="synopsis" class="form-control input-sm" placeholder="Synopsis"></textarea>
                                            </div>
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                            <div class="row justify-content-center">
                                <div class="col-md-2">
                                    <input type="submit"  value="Save" class="btn btn-success">
                                    <a href="{{ route('book.index') }}" class="btn btn-info" >Return</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection