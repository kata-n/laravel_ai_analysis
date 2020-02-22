@extends('layouts.contents-template')

@section('title','登録画面')

@section('header')
  @parent
  <p>API技術テスト</p>
@endsection

@section('content')
  <section class="top">
    <div class="top-main">
      <div>トップページ</div>
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
      <a href="{{ url('/regist') }}">登録する</a>
    </div>
  </section>
@endsection