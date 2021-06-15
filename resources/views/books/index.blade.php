@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Books Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
 <tr>
   <th>Title</th>
   <th>Author</th>
   <th>Action</th>
 </tr>
 @foreach ($items as $item)
  <tr>
    <td>{{ $item->title }}</td>
    <td>{{ $item->author }}</td>
    <td>
       <a class="btn btn-info" href="{{ route('books.show',$item->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('books.edit',$item->id) }}">Edit</a>
       <form action="{{ route('books.destroy', [$item->id]) }}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn btn-danger" type="submit" value="delete">
        </form>
    </td>
  </tr>
 @endforeach
</table>


<div>{{ $items->links() }}</div>


@endsection