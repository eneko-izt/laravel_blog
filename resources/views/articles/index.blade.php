@extends('layout')

@section('content')

<div id="page-wrapper">

    <div id="page" class="container">

        @foreach ($articles as $article)
		
        <div id="content">
            <div class="title">
                <h2>
                    <a href="/articles/{{ $article->id }}">{{$article->title}}</a>
                </h2>
            </div>
            <p>
                <div id="banner" class="container">
                    <img src="/images/banner.jpg" width="600" height="200" alt="" >
                </div>
                {!! $article->excerpt !!}
            </p>
        </div>
        
        @endforeach

    </div>
</div>

@endsection