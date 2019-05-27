<!-- adminlte::page Inheritance -->
@extends('adminlte::page')

<!-- read page title -->
@section('title', 'Dashboard')

<!-- read page header -->
@section('content_header')
    <h1>入力　画面</h1>
@stop

<!-- read main content -->
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="container">
        <div>
            <h1>    入力してちょ </h1>
            <form action="/submit" method="post" >
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Plese fix the following errors
                    </div>
                @endif

                {!!csrf_field()!!}

                <div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <div class="alert alert-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                    @if($errors->has('url'))
                        <span>
                            <div class="alert alert-danger">
                                {{ $errors->first('url') }}
                            </div>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <div class="alert alert-danger">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">登録</button>
            </form>
        </div>
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
