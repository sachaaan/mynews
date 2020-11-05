{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title','ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="#c0c0c0">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date"> 
                                    {{ $post->updated_at->format("Y年m月d日") }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->gender, 1500) }}
                                </div>
                            </div>
                        </div>
                        <hr color="#c0c0c0">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection                