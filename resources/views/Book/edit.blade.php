@extends('layouts.layout')
@section('content')
    <div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
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
                    <h3 class="panel-title">New Book</h3>
                </div>
                <div class="panel-body">     
                    <div class="table-container">
                        <form method="POST" action="{{ route('book.update',$book->id) }}"  role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control input-sm" value="{{$book->title}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="pages" id="pages" class="form-control input-sm" value="{{$book->pages}}">
                                        </div>
                                    </div>
                                </div>

                            <div class="form-group">
                                <textarea name="synopsis" class="form-control input-sm"  placeholder="Synopsis">{{$book->synopsis}}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="edition" id="edition" class="form-control input-sm" value="{{$book->edition}}">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="price" id="price" class="form-control input-sm" value="{{$book->price}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="author" class="form-control input-sm" placeholder="Autor">{{$book->author}}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit"  value="Update" class="btn btn-success btn-block">
                                    <a href="{{ route('book.index') }}" class="btn btn-info btn-block" >Return</a>
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