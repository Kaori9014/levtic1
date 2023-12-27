<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <x-app-layout>
    <x-slot name="header">
    Index
    </x-slot>
    <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        
        <div class='posts'>
          @foreach ($posts as $post)
              <div class='post'>
                   <h2 class='title'>
                       <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                       
                   </h2>
                   <p class='body'>{{ $post->body }}</p>
              </div>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
          @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links()}}
        </div>
        <a>
            {{ Auth::user()->name }}
        </a>
        <div>
          @foreach($questions as $question)
              <div>
                  <a href="https://teratail.com/questions/{{ $question['id'] }}">
                        {{ $question['title'] }}
                  </a>
              </div>
          @endforeach
        </div>
    </body>
  </x-app-layout>
</html>