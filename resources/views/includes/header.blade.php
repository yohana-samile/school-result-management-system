<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SRMS') }}</title>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="{{ url("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
        <link href="{{ url("css/srms.min.css")}}" rel="stylesheet">
        <link href="{{ url("vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body id="page-top">
