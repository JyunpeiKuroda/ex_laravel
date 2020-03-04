@extends('layout.h&f')
@section('title', '投稿')
@section('content')

<div class="form_box">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="js/style.js" type="text/javascript"></script>
    <form action="post_exe.php" method="post">
      <h1>投稿画面です</h1><br>
      <label class="input-btn">
        <span class="btn btn-primary">
          写真を選択<input type="file" onChange="imgPreView(event)" style="display:none">
        </span>
      </label>
      <div id="preview"></div><br>
      <textarea name="comment" rows="7" cols="40" maxlength="200" ></textarea>
      <br>
      <div class="form_item"><input type="submit" value="投稿" class="btn btn-primary"></div>
    <form>
</div>
@endsection

