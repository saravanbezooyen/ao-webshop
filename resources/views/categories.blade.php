@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title">
        <h1>Categories</h1>
    </div>

    <div class="links">
        @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
    @endforeach
    </div>
</div>

@endsection
