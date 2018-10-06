<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67999752-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-67999752-2');
    </script>


    <title>Программа для рерайта</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Рерайт, Рерайтинг, Программа для рерайта, Программа для рерайтеров, Начинающим рерайтерам, Рерайтер" />
    <meta name="author" content="mepata@yandex.ru" />
    <meta name="description" content="Данный сайт содержит информацию для начинающих и продвинутых рерайтеров" />
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body>

@yield('content')

<br/>
<br/>
<div class="container-narrow">
    <div class="jumbotron">
        <a href="{{ url('/') }}">На главную</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/contacts') }}">Контакты</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/return') }}">Возврат</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/about') }}">О компании</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/support') }}">Поддержка</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/license') }}">Пользовательское соглашение</a>
    </div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pre_activate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>