@extends('layouts.contents-template')

@section('title','トップページ')

@if (session('flash_message'))
  <!--フラッシュメッセージ-->
  <div class="alert alert-primary text-center" role="alert">
    {{ session('flash_message') }}
  </div>
@endif

@section('content')
  <section class="top">
    <div class="top__main">
      <a class="btn btn-outline-primary" role="button" href="{{ url('/regist') }}">登録する</a>
      <a class="btn btn-outline-primary" role="button" href="{{ url('/show') }}">登録したデータ一覧</a>
    </div>
  </section>
@endsection