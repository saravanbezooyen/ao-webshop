@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title">
        <h1>Categories</h1>
    </div>

    <div class="links">
        @foreach ($categories as $category)
        <a href="/products/{{$category->id }}">{{ $category->name }}</a>
        @endforeach
    </div>
</div>

@endsection
