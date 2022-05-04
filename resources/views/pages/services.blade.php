@extends('pages.layouts.app')

@section('content')
    <base target="_blank"> <!--ozim sinov uchun yozdim bu blank ochadi-->
    
    <h1>{{$title}}</h1>
    
    <em>{{$description}}</em>
    
    @if(count($services) >  0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

    <a href="about">asd</a>
@endsection
