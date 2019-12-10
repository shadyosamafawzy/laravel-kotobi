@extends('admin.index')


@section('title')
    Edit Author
@endsection
@section('content')

    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                Edit Author
            </header>
            @error('name')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('name')}}</strong>
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
                <form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{url('author/edit/'.$author->author_id)}}" method="post">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Author Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" placeholder="Author Name" value="{{$author->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Author image</label>
                        <div class="col-lg-10">
                            <img src="{{asset('uploads/'.$author->image)}}" height="100" width="100" />
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
