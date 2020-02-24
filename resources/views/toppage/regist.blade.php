@extends('layouts.contents-template')

@section('title','登録画面')

@section('content')
  <section class="regist">
    <h2 class="heading">登録ページ</h2>
    <p>画像URLを入力して下さい（.jpgのみ）</p>
    <div class="regist__imgurl">
      <input type="text" id="path1">
      <input type="submit" id="pathsend" class="btn btn-success" value="APIへ送信">
    </div>
    <div class="regist__result">
      <h3 class="title">API送信結果</h3>
      <form method="post" action="{{ route('dbsend') }}" enctype="multipart/form-data" class="regist__form">
        @csrf

        <input type="text" class="img_path" name="img_path" hidden>

        <lavel name="status">ステータス</lavel>
        <div class="error">{{ $errors->first('status') }}</div>
        <input type="text" class="status" name="status" readonly>

        <lavel name="details">詳細</lavel>
        <div class="error">{{ $errors->first('details') }}</div>
        <input type="text" class="details" name="details" readonly>

        <lavel name="classification">分類（クラス）</lavel>
        <input type="text" class="classification" name="classification" readonly>
        <lavel nale="confidence">信頼度</lavel>
        <input type="text" class="confidence" name="confidence" readonly>

        <button type="submit" class="btn btn-primary btn-large">DBへ登録</button>
      </form>
    </div>
    <div class="regist__footer">
      <a class="btn btn-outline-primary" role="button" href="{{ url('/show') }}">登録したデータ一覧</a>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/imgajax.js"></script>
@endsection