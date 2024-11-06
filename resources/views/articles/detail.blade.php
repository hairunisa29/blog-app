@extends('layouts.main')
@section('content')
<div class="container-fluid py-24 px-36">
    <h1 class="font-bold text-2xl">{{ $article->title }}</h1>
    <p class="text-gray-400">{{ $article->author->author_name }}</p>

    <p class="mt-6">{{ $article->description }}</p>
</div>
@endsection