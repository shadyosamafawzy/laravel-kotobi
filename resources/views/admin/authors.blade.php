@extends('admin.index')

@section('title')
    Authors
@endsection
@section('content')
    @if(!is_object($authors))
        <h2>{{$authors}}</h2>
    @else
        <div class="row product-list">
            @foreach($authors as $author)

                <div class="col-md-4">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="{{asset('/uploads/'.$author->image)}}" height="200" width="200" alt="author photo">

                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    {{$author->name}}
                                </a>
                            </h4>
                            <a class="btn btn-primary btn-xs" href="author/edit/{{$author->author_id}}"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger btn-xs" href="author/del/{{$author->author_id}}"><i class="fa fa-trash-o "></i></a>

                        </div>
                    </section>
                </div>

            @endforeach

        </div>
    @endif
@endsection