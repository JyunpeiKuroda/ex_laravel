@extends('layout')
@section('title', '新規登録')
@section('content')
<div class="form_box">
    <p>こちらは新規登録ページです</p>
    <form action="signup_exe.php" method="post">
    <div class="form_item">メールアドレス：<input type="text" name="email" class="form-control"></div>
    <div class="form_item">パスワード：<input type="password" name="password" class="form-control"></div>
    <div class="form_item">ニックネーム：<input type="text" name="nickname" class="form-control"></div>
    <div class="form_item"><input type="submit" value="登録する" class="btn btn-primary"></div>
    <form>
</div>
@endsection