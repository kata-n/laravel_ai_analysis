@extends('layouts.contents-template')

@section('title','一覧画面')

@section('content')
  <p>一覧表示ページ</p>
  <section class="top">
    <div class="container p-mypage">
      @if(count($lists)!= 0)
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:16px">{{ __('ID.') }}</th>
              <th style="width:400px">{{ __('画像パス') }}</th>
              <th style="width:180px">{{ __('ステータス') }}</th>
              <th style="width:80px">{{ __('詳細') }}</th>
              <th style="width:150px">{{ __('分類(クラス)') }}</th>
              <th style="width:80px">{{ __('信頼度') }}</th>
              <th style="width:80px">{{ __('送信日') }}</th>
              <th style="width:80px">{{ __('応答日') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lists as $key => $list)
            <tr>
              <td>{{ $list->id }}</td>
              <td>{{ $list->image_path }}</td>
              <td>{{ $list->success }}</td>
              <td>{{ $list->message }}</td>
              <td>{{ $list->class }}</td>
              <td>{{ $list->confidence }}</td>
              <td>{{ $list->request_timestamp }}</td>
              <td>{{ $list->response_timestamp }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p class="text-center my-5">登録データはありません</p>
        @endif
      </div>
    </div>

      <a  class="btn btn-outline-primary" role="button" href="{{ url('/regist') }}">登録画面へ</a>
  </section>
@endsection