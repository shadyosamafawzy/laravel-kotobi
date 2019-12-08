@extends('admin.index')


@section('title')
categories
@endsection
@section('content')

   @if(!is_object($categories))
       <h2>{{$categories}}</h2>
       @else

       <table class="table table-striped table-advance table-hover">
           <thead>
           <tr>
               <th><i class="fa fa-bullhorn"></i> category name</th>
               <th><i class=" fa fa-edit"></i> Actions</th>
               <th></th>
           </tr>
           </thead>
           <tbody>
           @foreach($categories as $category)
               <tr>
                   <td><a href="#">{{$category->cat_name}}</a></td>
                   <td>
                       <a class="btn btn-primary btn-xs" href="cat/edit/{{$category->cat_id}}"><i class="fa fa-pencil"></i></a>
                       <a class="btn btn-danger btn-xs" href="cat/del/{{$category->cat_id}}"><i class="fa fa-trash-o "></i></a>
                   </td>
               </tr>
           @endforeach
           </tbody>
       </table>
   @endif





@endsection

