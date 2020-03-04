@extends('layout')
@section('title', '投稿')
@section('content')
<div class="form_box">
    <p>投稿画面のページです</p>
    <form action="post_exe.php" method="post">
      <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
    <div class="form_item"><input type="submit" value="写真を選択する" class="btn btn-primary"></div><br>
    <textarea name="comment" rows="7" cols="40" maxlength="200" ></textarea>
    <br>
    <div class="form_item"><input type="submit" value="登録する" class="btn btn-primary"></div>
    <form>
</div>
@endsection