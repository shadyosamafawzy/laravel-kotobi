@extends('admin.index')

@section('title')
    Book
@endsection
@section('content')
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="{{asset('uploads/'.$author[0]->image)}}" alt="">
                </a>
                <h1>{{$author[0]->name}}</h1>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{asset('author/'.$author[0]->author_id)}}"> <i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{asset('author/edit/'.$author[0]->author_id)}}"> <i class="fa fa-edit"></i> Edit profile</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
    <div class="panel-body">
        <div class="col-md-6">
            <div class="pro-img-details">
                <img src="{{asset('uploads/'.$book->image)}}" alt="">
            </div>

        </div>
        <div class="col-md-6">
            <h4 class="pro-d-title">
                <p class="">
                    {{$book->title}}
                </p>
            </h4>
            <p>
               {{$book->description}}
            </p>
            <div class="product_meta">
                <span class="posted_in"> <strong>Category:</strong> <a rel="tag" href="#">{{$categories}}</a>.</span>
            </div>
            <p>
                <a class="btn btn-round btn-danger" href="{{asset('book/del/'.$book->book_id)}}"><i class="fa fa-trash-o"></i> Delete</a>
                <a class="btn btn-round btn-primary" href="{{asset('book/edit/'.$book->book_id)}}"><i class="fa fa-pencil"></i> Update</a>
            </p>
        </div>
    </div>
    </aside>
@endsection