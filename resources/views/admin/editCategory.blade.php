@extends('admin.index')


@section('title')
    Edit Category
@endsection
@section('content')

    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                Edit Category
            </header>
            @error('cat_name')
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{$errors->first('cat_name')}}</strong>
            </div>
            @enderror
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{url('cat/edit/'.$category->cat_id)}}" method="post">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <input type="text" name="cat_name" class="form-control" placeholder="Category Name" value="{{$category->cat_name}}">
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
