@extends('layouts.main')
@section('content')
<div class="container-fluid py-24 px-72">
    <h1 class="font-bold text-2xl">Post a new article</h1>
    <form method="POST" action="{{ route('articles.update', $article->id) }}" class="flex flex-col gap-8 mt-8">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('title', $article->title) }}"
                required
            >
            @error('title')
                <div class="text-red-400 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <textarea 
                id="description" 
                name="description"
                rows="12" 
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500"
                required
            >
                {{ old('description', $article->description) }}
            </textarea>
            @error('description')
                <div class="text-red-400 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="author_id" class="block mb-2 text-sm font-medium text-gray-900">Author</label>
            <select 
                id="author_id" 
                name="author_id"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500" 
                required
            >
                <option value="">Select an Author</option>
                @foreach ($authors as $author)
                <option 
                    value="{{ $author->id }}"
                    {{ old('author_id', $article->author_id) == $author->id ? 'selected' : '' }}    
                >
                    {{ $author->author_name }}
                </option>
                @endforeach
            </select>

            @error('author_id')
                <div class="text-red-400 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Update</button>
    </form>

</div>
@endsection