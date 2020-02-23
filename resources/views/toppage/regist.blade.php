@extends('layouts.contents-template')

@section('title','登録画面')

@section('content')
  <section class="regist__input">
    <p>登録ページ</p>
    <div class="top-main">
      <input type="text" id="path1">
      <input type="submit" id="pathsend" class="btn btn-success" value="APIへ送信">
    </div>
    <div class="regist__result">
      <p>API送信結果</p>
      <form method="post" action="{{ route('dbsend') }}" enctype="multipart/form-data" class="form">
        @csrf

        <input type="text" class="img_path" name="img_path" hidden>
        <lavel name="status">ステータス
          <input type="text" class="status" name="status">
        </lavel>
        <lavel name="details">詳細
          <input type="text" class="details" name="details">
        </lavel>
        <lavel name="classification">分類（クラス）
          <input type="text" class="classification" name="classification">
        </lavel>
        <lavel nale="confidence">信頼度
          <input type="text" class="confidence" name="confidence">
        </lavel>

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