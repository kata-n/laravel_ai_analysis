@extends('layouts.contents-template')

@section('title','登録画面')

@section('header')
  @parent
  <p>API技術テスト</p>
@endsection

@section('content')
  <section class="regist__input">
    <p>登録ページ</p>
    <div class="top-main">
      <input type="text" id="path1">
      <input type="submit" id="pathsend" class="btn btn-success" value="APIへ送信">
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
      <a href="{{ url('/') }}">トップページ</a>
    </div>
    <div class="regist__result">
      <p>API送信結果</p>
      <form method="post" action="{{ route('dbsend') }}" enctype="multipart/form-data" class="form">
        @csrf
        <input type="text" class="status" name="status">
        <input type="text" class="details" name="details">
        <input type="text" class="classification" name="classification">
        <input type="text" class="confidence" name="confidence">

        <button type="submit" class="btn btn-primary btn-large">DBへ登録</button>
      </form>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/imgajax.js"></script>
@endsection