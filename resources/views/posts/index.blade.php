@extends('app-layout')

@section('content')
    @if ($posts ->count())
        
    <ul class='mt-10 space-y-10'>
        @foreach ($posts as $post)
            <li>
                <div class="space-y-5 prose text-justify max-w-none">
                    <h2><a href="/posts/{{$post ->slug}}">{{ $post -> title}}</a></h2>
        <div>{{ $post->excerpt }}</div>
        <div>Posted: {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
    
                </div>
        </li>
    @endforeach
    </ul>
@endif

@endsection