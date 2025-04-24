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
            {{ $article->body }}
        </div>
	</div>
</div>

@endsection