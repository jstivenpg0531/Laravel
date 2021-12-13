@extends('dashboard.master')

@section('content')
    <form action="{{route('post.update', $post -> id) }}" method="post">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection