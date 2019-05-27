<!-- adminlte::page Inheritance -->
@extends('adminlte::page')

<!-- read page title -->
@section('title', 'Dashboard')

<!-- read page header -->
@section('content_header')
    <h1>回答</h1>
@stop

<!-- read main content -->
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="answer">

    </div>
@stop

<!-- read css -->
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!-- read js -->
@section('js')
    <script> console.log('Custom javascript'); </script>
@stop
