<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>

<body>
    @extends('layouts.master')
    <div>

        @section('body')
        <h1>Hello world</h1>
        @endsection
    </div>
</body>

</html>
