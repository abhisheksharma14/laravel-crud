<!DOCTYPE html>
<html>
    <head>
        <title>Search | Polar</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://simeydotme.github.io/jQuery-ui-Slider-Pips/dist/css/jqueryui.min.css" rel="stylesheet" type="text/css">
        <link href="https://simeydotme.github.io/jQuery-ui-Slider-Pips/dist/css/jquery-ui-slider-pips.min.css" rel="stylesheet" type="text/css">
        <link href="https://simeydotme.github.io/jQuery-ui-Slider-Pips/dist/css/app.min.css" type="text/css">
        <link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/search.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/gallery.css')}}" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="header">
            <div class="brand"><a href="/">Polar</a></div>
            <div class="menu">
                <ul class="horizontal">
                    <li><a href="/upload">Upload</a></li>
                    <li  class="active"><a href="#">Search</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="search">
                <div class="hue-slide">
                    <h1>Select Hue Range</h1>
                    <br>
                    <div id="scale-slider"></div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="content">
                <span class="alert"></span>
                <hr>
                <div class="gallery"></div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
        <script src="https://simeydotme.github.io/jQuery-ui-Slider-Pips/dist/js/jquery-plus-ui.min.js"></script>
        <script src="https://simeydotme.github.io/jQuery-ui-Slider-Pips/dist/js/jquery-ui-slider-pips.js"></script>
        <script src="{{asset('js/search.js')}}"></script>
    </body>
</html>