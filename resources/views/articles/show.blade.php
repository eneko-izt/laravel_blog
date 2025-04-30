@extends('layout')

@section('content')

<div id="page-wrapper">

    <div id="page" class="container">
		<div id="content">
            <div class="title">
                <h2>{{ $article->title }}</h2>
            </div>
            <div id="banner" class="container">
                <img src="/images/banner.jpg" width="600" height="200" alt="" >
            </div>

            {!! $article->body !!}

            <p style="margin-top: 1em;">
                 @foreach ( $article->tags as $tag )
                    <!-- <a href="/articles/tag/{{ $tag->id }}">{{ $tag->name }}</a> -->
                    <!-- @if (!$loop->last)
                        ,
                    @endif  -->

                    <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                 @endforeach
            </p>

        </div>
	</div>
</div>

@endsection