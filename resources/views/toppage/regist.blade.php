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
      <div>けいげんクイズ</div>
      <div>あの出来事は8％・10%どっち?</div>
      <a href="{{ url('/show') }}">登録したデータ一覧</a>
    </div>
  </section>
@endsection