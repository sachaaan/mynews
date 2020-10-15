<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta htttp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <title>profile create</title>
    </head>
    <body>
        <h1>プロフィール作成</h1>
    </body>
    
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title','ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成</h2>
            <div/>
        </div>
    </div>
@endsection
</html>