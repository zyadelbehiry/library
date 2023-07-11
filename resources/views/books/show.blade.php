@extends('layout')
@section('content')
<h2>{{$book->title}}</h2>
<p>{{$book->description}}</p>
<hr>
<a href="{{ route('books.index',$book->id) }}" class="btn btn-primary"> back</a>
<a href="{{ route('books.delete',$book->id) }}" class="btn btn-danger">Delete</a>

@endsection