{{-- layouts/admin.profile.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.profile.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title','ニュースの新規作成')

{{-- admin.profile.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成</h2>
            <div/>
        </div>
    </div>
@endsection
