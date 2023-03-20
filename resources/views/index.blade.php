@extends('layout.base')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Home</h1>
        <p class="text-lg">This is the home page.</p>
    </div>

    <div class="flex flex-col">
    @each('layout.user', $users, 'user')
    </div>
@endsection
