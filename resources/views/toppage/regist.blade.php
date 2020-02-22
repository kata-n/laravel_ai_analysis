@extends('layouts.contents-template')

@section('title','登録画面')

@section('header')
  @parent
  <p>API技術テスト</p>
@endsection

@section('content')
  <section class="top">
    <p>登録ページ</p>
    <div class="top-main">
      <input type="text" id="path1">
      <input type="submit" id="pathsend" class="btn btn-success" value="APIへ送信">
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
      <a href="{{ url('/') }}">トップページ</a>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/imgajax.js"></script>
@endsection