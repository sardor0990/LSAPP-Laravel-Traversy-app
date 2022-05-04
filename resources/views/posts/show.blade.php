@extends('pages.layouts.app')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

@section('content')
    <a class="btn btn-primary mb-5" href="/lsapp/public/posts">Go Back</a>
   <h1 style="color:olivedrab">{{$post->title}}</h1>
   <div style="color:yellow">
       {{$post->body}}
   </div>
   <hr>
   <small style="color:violet">Written on {{$post->created_at}}</small>
@endsection