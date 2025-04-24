@extends('layout')

@section('content')

<div id="page-wrapper">

    <div id="page" class="container">
		<div id="content">
            <div class="title">
                <h2>Welcome to our website</h2>
            </div>
            <div id="banner" class="container">
                <img src="images/banner.jpg" width="600" height="200" alt="" >
            </div>
	        <div id="two-column">
				<div class="box1">
					<ul class="default"><li><a href="#">Vestibulum luctus venenatis dui</a></li>
						<li><a href="#">Integer rutrum nisl in mi</a></li>
						<li><a href="#">Etiam malesuada rutrum enim</a></li>
						<li><a href="#">Aenean elementum facilisis ligula</a></li>
						<li><a href="#">Ut tincidunt elit vitae augue</a></li>
					</ul><a href="#" class="button button-small">Etiam posuere</a>
				</div>
				<div class="box2">
					<ul class="default"><li><a href="#">Vestibulum luctus venenatis dui</a></li>
						<li><a href="#">Integer rutrum nisl in mi</a></li>
						<li><a href="#">Etiam malesuada rutrum enim</a></li>
						<li><a href="#">Aenean elementum facilisis ligula</a></li>
						<li><a href="#">Ut tincidunt elit vitae augue</a></li>
					</ul><a href="#" class="button button-small">Etiam posuere</a>
				</div>
			</div>
			
		</div>
		<div id="sidebar">
			<ul class="default">
                @foreach ($articles as $article )
                    <li>
                        <h3>
                            <a href="/articles/{{ $article->id }}">{{$article->title}}</a>
                        </h3>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                @endforeach
			</ul>
            <div class="section">
				<h3>Aenean elementum facilisis</h3>
				<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</p>
			</div>
		</div>
	</div>
</div>

@endsection