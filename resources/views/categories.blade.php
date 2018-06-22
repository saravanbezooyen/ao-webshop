@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>

    @foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    @endforeach
</div>
@endsection
