@extends('layouts.contents-template')

@section('title','登録画面')

@if (session('flash_message'))
  <!--フラッシュメッセージ-->
  <div class="alert alert-primary text-center" role="alert">
    {{ session('flash_message') }}
  </div>
@endif

@section('content')
  <section class="top">
    <div class="top-main">
      <div>トップページ</div>
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
      <a href="{{ url('/regist') }}">登録する</a>
    </div>
  </section>
@endsection