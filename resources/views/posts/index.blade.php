@extends('pages.layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0 )
        @foreach($posts as $post)
            <div class="list-group-item list-group-item-action">
                <h3><a class="title-link" href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection