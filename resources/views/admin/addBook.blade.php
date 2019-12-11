@extends('admin.index')


@section('title')
    Add Book
@endsection
@section('content')

    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                Add Book
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
                <form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{url('add/book')}}" method="post">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Book title</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" placeholder="Book title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Book Description</label>
                        <div class="col-lg-10">
                            <textarea cols="50" rows="5" name="description" class="form-control" placeholder="Book Description" >{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Book Author</label>
                        <div class="col-lg-10">
                            <select class="form-control m-bot15" name="author_id">
                                @foreach($authors as $author)
                                    <option value="{{$author->author_id}}">{{$author->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Book Categories</label>
                            <div class="col-lg-10">
                                <select multiple class="form-control m-bot15" name="categories[]">
                                    @foreach($categories as $category)
                                        <option value="{{$category->cat_id}}">{{$category->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    <div class="form-group">
                        <label  class="col-lg-2 col-sm-2 control-label">Book Cover</label>
                        <div class="col-lg-10">
                            <input type="file" name="image" value="{{old('image')}}" class="form-control" >
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection
