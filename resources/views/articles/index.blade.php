@extends('layouts.main')
@section('content')
<div class="container-fluid p-12">
    <div class="flex justify-between">
        <h1 class="font-bold text-2xl">Book Reviews</h1>
        <a href="{{ route('articles.add') }}" class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
            Create New Post
        </a>
    </div>

    <div class="grid grid-cols-4 gap-4">
        @foreach ($articles as $article)
        <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg">
            <div class="p-4">
              <h5 class="mb-2 text-slate-800 text-xl font-semibold">
                {{ $article->title }}
              </h5>

              <p class="text-slate-600 text-sm leading-normal font-light mb-6">
                {{ $article->author->author_name }}
              </p>
              
              <div class="flex justify-between">
                <a href="{{ route('articles.show', $article->id) }}" class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                  Read more
                </a>

                <div class="flex self-center gap-4">
                  <a href="{{ route('articles.edit', $article->id) }}">
                    <i class="fa-regular fa-pen-to-square text-blue-500"></i>
                  </a>

                  <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this article?')">
                      <i class="fa-regular fa-trash-can text-red-500"></i>
                    </button>
                 </form>

                
                </div>
              </div>
              
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection