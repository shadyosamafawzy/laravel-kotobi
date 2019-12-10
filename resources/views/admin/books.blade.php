@extends('admin.index')

@section('title')
    Books
@endsection
@section('content')
    @if(!is_object($books))
        <div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <strong>{{$books}}</strong>
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
                                <a href="#" class="pro-title">
                                    {{$book->title}}
                                </a>
                            </h4>
                            <a class="btn btn-primary btn-xs" href="book/edit/{{$book->book_id}}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="book/del/{{$book->book_id}}"><i class="fa fa-trash-o "></i></a>

                        </div>
                    </section>
                </div>

            @endforeach

        </div>
    @endif
@endsection