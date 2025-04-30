@extends('layout')

@section('content')

<div id="page-wrapper">

    <div id="page" class="container">
        <div id="content">

            @forelse ($articles as $article)
            
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

            @empty
                <p>No articles found.</p>
            @endforelse

        </div>

    </div>
</div>

@endsection