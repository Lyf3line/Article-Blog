<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Uren registratie')}}</title>
    </head>
    <body>
    	@include('inc.navbar')
    	<br>
    	<div class="container">
        @yield('content')
    	</div>
    </body>
</html>
