@extends('admin.index')


@section('title')
    Edit Book
@endsection
@section('content')

    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                Edit Book
            </header>

            @error('title')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('title')}}</strong>
            </div>
            @enderror
            @error('description')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('description')}}</strong>
            </div>
            @enderror
            @error('author_id')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('author_id')}}</strong>
            </div>
            @enderror
            @error('image')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('image')}}</strong>
            </div>
            @enderror


            <div class="panel-body">
                <form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{url('book/edit/'. $book->book_id)}}" method="post">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Book title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" placeholder="Book title" value="{{$book->title}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Book Description</label>
                        <div class="col-lg-10">
                            <textarea cols="50" rows="5" name="description" class="form-control" placeholder="Book Description" >{{$book->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Book Author</label>
                        <div class="col-lg-10">
                            <select class="form-control m-bot15" name="author_id">
                                @foreach($authors as $author)
                                    @if($book->author_id == $author->author_id)
                                        <option value="{{$author->author_id}}" selected>{{$author->name}}</option>
                                    @else
                                        <option value="{{$author->author_id}}" >{{$author->name}}</option>

                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label  class="col-lg-2 col-sm-2 control-label">Book Cover</label>
                        <div class="col-lg-10">
                            <img width="200" height="100" src="{{asset('uploads/'.$book->image)}}">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-danger">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection
