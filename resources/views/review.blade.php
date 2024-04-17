@extends('layout')

@section('title')フィードバック@endsection

@section('main_content')

<style>
  .form-container {
    max-width: 500px;
    /* Задайте максимальную ширину формы */
    margin: 0 auto;
    /* Центрируйте форму по горизонтали */
  }

  body {
    background-image: url('<?php echo asset('/images/182217-abstract-pastel-brown-graphic-background.jpg'); ?>');
    background-size: cover;
    /* чтобы фон занимал всю доступную область */
    background-position: center;
    /* чтобы фон был выровнен по центру */
    background-repeat: no-repeat;
    /* чтобы фон не повторялся */
  }
</style>

<h2 class="pt-5 mt-3 mb-4 text-center" style="text-shadow: 1px 1px 2px rgb(142,64,42);">フィードバックフォーム</h2>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-container">
  <form method="post" action="/review/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Eメールを入力してください" class="form-control"></br>
    <input type="text" name="subject" id="subject" placeholder="フィードバック内容（テーマ）" class="form-control"></br>
    <textarea name="message" id="message" placeholder="メッセージを入力してください" class="form-control"></textarea></br>
    <button type="submit" class="btn btn-success">送信</button>
  </form>
</div>
</br>
<div class="mt-5 pt-5 featurette-heading fw-normal text-center pb-3" style="text-shadow: 1px 1px 2px rgb(142,64,42);">
  <h1>フィードバック:</h1>
</div>

@foreach($reviewOutput as $element)
<div class="alert alert-primary form-container">
  <h3>{{ $element -> subject }}</h3>
  <h4>{{ $element -> message }}</h4>
</div>
<div class="mb-1 pb-1"></div>
@endforeach

<div class="mb-5 pb-5"></div>

@endsection