<!DOCTYPE html>

@extends('layout.h&f')
@section('title', 'トップページ')
@section('content')
<html>
  <body>
    <div class="top-big">
      <div class="top-big-box">
        <h1>トップページ</h1>
        <div class="top-post-sheets">
          <div class="top-post-sheet">
            <div class="post-sheet-title">
              <div class="post-user-name"></div>
              <button class= "delete">削除</button>
            </div>

            <div class="post-img">
              <div class="post-sheet-img"></div>
            </div>

            <div class="post-sheet-text">
              <div class="post-text"></div>
              <button class="post-like">イイネ</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<a href="{{ url('signup') }}">新規登録ページへ</a>
@endsection