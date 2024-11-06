@extends('layouts.main')
@section('content')
<div class="container-fluid p-12">
    <h1 class="font-bold">Book Reviews</h1>

    <div class="flex gap-4">
        @foreach ($articles as $article)
        <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
            <div class="p-4">
              <h5 class="mb-2 text-slate-800 text-xl font-semibold">
                {{ $article->title }}
              </h5>
              <p class="text-slate-600 leading-normal font-light mb-6">
                {{ $article->author->author_name }}
              </p>
           
              <a href="{{ route('articles.show', $article->id) }}" class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Read more
              </a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection