<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="">
        <link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
        <link href="assets/css/default.css" rel="stylesheet" >
        <link href="assets/css/fonts.css" rel="stylesheet" >
    </head>
    <body>

        <div id="header" class="container">
            <div id="logo">
                    <h1><a href="/">Assembly</a></h1>
            </div>
            <div id="menu">
                <ul><li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="{{ Request::path() === 'clients' ? 'active' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="{{ Request::path() === 'careers' ? 'active' : '' }}"><a href="#" accesskey="4" title="">Careers</a></li>
                    <li class="{{ Request::path() === 'contact' ? 'active' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>

            @yield('header')
        </div>

    @yield('content')

        <div id="copyright" class="container">
            <p>Site made with: <a href="https://templated.co/">Templated.co</a></p>
        </div>
    
    </body>
</html>
