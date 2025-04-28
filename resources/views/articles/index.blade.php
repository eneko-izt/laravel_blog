@extends('layout')

@section('content')

<div id="page-wrapper">

    <div id="page" class="container">
        <div id="content">

            @foreach ($articles as $article)
            
                <div class="title">
                    <h2>
                        <a href={{ $article->path() }}>{{$article->title}}</a>
                    </h2>
                </div>
                <p>
                    <div id="banner" class="container">
                        <img src="/images/banner.jpg" width="600" height="200" alt="" >
                    </div>
                    {!! $article->excerpt !!}
                </p>
            
            @endforeach

        </div>

    </div>
</div>

@endsection