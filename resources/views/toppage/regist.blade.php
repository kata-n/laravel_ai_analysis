@extends('layouts.contents-template')

@section('title','登録画面')

@section('header')
  @parent
  <p>API技術テスト</p>
@endsection

@section('content')
  <p>登録ページ</p>
  <section class="top">
    <div class="top-main">
    <form action="postpath" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" id="path1">
      <hr>
      <button class="btn btn-success">登録</button>
    </form>
     <input type="button" id="button" value="sample2.html取得" />
     <br>
     <div id="text"></div>
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
      <a href="{{ url('/') }}">トップページ</a>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    let imgpath;
    $(function(){
      $('#button').click(
      function() {
        imgpath = $('#path1').val();
        $.ajax({
          type: 'POST',
          url: 'https://shikatana.com/contents/10-apitest/api/reception.php',
          dataType: "json",
          data: {image_path : imgpath }
        }).done(function (results) {
          // 通信成功時の処理
          $('#text').html(results);
        }).fail(function (err) {
          // 通信失敗時の処理
          alert('ファイルの取得に失敗しました。');
          console.log(imgpath);
        });
      }
      );
    });
    </script>
@endsection