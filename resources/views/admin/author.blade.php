@extends('admin.index')

@section('title')
    Author
@endsection
@section('content')
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="{{asset('uploads/'.$author->image)}}" alt="">
                </a>
                <h1>{{$author->name}}</h1>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{asset('author/del/'.$author->author_id)}}"> <i class="fa fa-trash-o"></i> Delete Author</a></li>
                <li><a href="{{asset('author/edit/'.$author->author_id)}}"> <i class="fa fa-edit"></i> Edit profile</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        @if(!is_array($books))
            <div class="alert alert-block alert-danger fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>No books found to this Author</strong>
            </div>
        @else
        <div class="row product-list">
            @foreach($books as $book)

                <div class="col-md-4">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="{{asset('/uploads/'.$book->image)}}" height="200" width="200" alt="author photo">

                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="book/{{$book->book_id}}" class="pro-title">
                                    {{$book->title}}
                                </a>
                            </h4>
                            <a class="btn btn-primary btn-xs" href="book/edit/{{$book->book_id}}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="book/del/{{$book->book_id}}"><i class="fa fa-trash-o "></i></a>

                        </div>
                    </section>
                </div>

            @endforeach
        @endif
        </div>
    </aside>
@endsection