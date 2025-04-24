<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Soft String 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140101

-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>

		</title>
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
		<meta name="description" content="">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900%7CQuicksand:400,700%7CQuestrial" rel="stylesheet">
		<link href="/css/default.css" rel="stylesheet">
		<link href="/css/fonts.css" rel="stylesheet">
        <link rel="/css/app.css" rel="stylesheet">
	</head>
	<body>

    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Soft String</a></h1>
            </div>
            <div id="menu">
                <ul><li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li class="{{ Request::is('about') ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}"><a href="/articles" accesskey="4" title="">Articles</a></li>
                    <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>

        @yield('header')
    </div>

    @yield('content')

    <div id="copyright" class="container">
		<ul class="contact"><li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
    </div>

    <div class="copyright">
        Design by: <a href="https://templated.co/">TEMPLATED.CO</a>
    </div>


    </body>
</html>
