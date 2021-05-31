<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Home Page</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to your Home') }}
        </h2>
    </x-slot> 
    <div class="container">
        @foreach ($posts as $post)
        <div class="card">
            <div class="image"><img src="{{ asset('images/' . $post->image_path) }}" alt="photo"></div>
            <div class="caption">{{ $post->caption }}</div>
            <div class="description">{{ $post->description }}</div>
        </div>    
        @endforeach
        <button> <a href="/dashboard/addpost">Add New Post</a></button>
    </div>    
</x-app-layout>

