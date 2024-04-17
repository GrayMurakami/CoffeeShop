@extends('layout')

@section('title')商品情報@endsection

@section('main_content')
<style>
  .card {
    display: flex;
    flex-direction: row;
    /* Направление главной оси: горизонтальное */
    align-items: center;
    /* Выравнивание по вертикали */
  }

  .card .card-body {
    flex: 1;
    /* Растягиваем текст на всю доступную ширину */
    padding: 20px;
  }

  .card-bg1:active,
  .card-bg2:active,
  .card-bg3:active {
    opacity: 0.7;
    /* Уменьшаем прозрачность при нажатии */
  }

  .card-bg1 {
    background-image: url('<?php echo asset('/images/Arabica_coffee.jpg'); ?>');
    background-size: cover;
    background-position: center;
  }

  .card-bg2 {
    background-image: url('<?php echo asset('/images/blend_coffee.jpg'); ?>');
    background-size: cover;
    background-position: center;
  }

  .card-bg3 {
    background-image: url('<?php echo asset('/images/robusta_coffee.jpg'); ?>');
    background-size: cover;
    background-position: center;
  }

  .link-zoom {
    transition: transform 0.3s ease;
  }

  .link-zoom:hover {
    transform: scale(1.02);
    /* Увеличение ссылки при наведении */
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

<section class="py-5 text-center container">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal text-body-emphasis" style="text-shadow: 1px 1px 2px rgb(115,66,34);">珈琲ショップ</h1>
    <p class="fs-5 text-body-secondary pt-4">
      ここでは、最もポピュラーなコーヒーの種類について少しご紹介しよう。コーヒーが好きな人はたくさんいると思いますが、私もその一人です。少なくとも私は、コーヒーは神の飲み物だと思っている！主な品種はいくつかありますが、このサイトではあなたの好みに合った品種を注文することができます。
    </p>
  </div>
</section>


<div class="container marketing pb-5">

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-2 px-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end text-center" style="text-shadow: 1px 1px 2px rgb(142,64,42);">アラビカ種</h2>
      <div class="card-body">
        <h1 class="card-title pricing-card-title px-3">¥800<small class="text-body-secondary fw-light lead px-2">/キログラム</small></h1>
        <ul class="mt-3 mb-4 px-5">
          <li class="lead fw-bold list-unstyled">注文情報:</li></br>
          <li class="lead">一人分5キログラムまで、OK</li></br>
          <li class="lead">✉ メールサポート</li></br>
          <li class="lead">☎ 電話サポート</li></br>
        </ul>
        <a href="/order" style="text-decoration: none;">
          <button type="button" class="w-50 btn btn-lg btn-outline-primary d-grid gap-2 col-6 mx-auto">アラビカ種を選択</button>
        </a>
      </div>
    </div>

    <div class="col-md-5 card-bg1 link-zoom">
      <div class="card-bg1" onclick="window.location.href='/order';">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </svg>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-2 px-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end text-center" style="text-shadow: 1px 1px 2px rgb(142,64,42);">ロブスタ種</h2>
      <div class="card-body">
        <h1 class="card-title pricing-card-title px-3">¥600<small class="text-body-secondary fw-light lead px-2">/キログラム</small></h1>
        <ul class="mt-3 mb-4 px-5">
          <li class="lead fw-bold list-unstyled">注文情報:</li></br>
          <li class="lead">一人分5キログラムまで、OK</li></br>
          <li class="lead">✉ メールサポート</li></br>
          <li class="lead">☎ 電話サポート</li></br>
        </ul>
        <a href="/order" style="text-decoration: none;">
          <button type="button" class="w-50 btn btn-lg btn-outline-primary d-grid gap-2 col-6 mx-auto">ロブスタ種を選択</button>
        </a>
      </div>
    </div>
    <div class="col-md-5 order-md-1 card-bg2 link-zoom">
      <div class="card-bg2" onclick="window.location.href='/order';">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </svg>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-2 px-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end text-center" style="text-shadow: 1px 1px 2px rgb(142,64,42);">ブレンドコーヒー</h2>
      <div class="card-body">
        <h1 class="card-title pricing-card-title px-3">¥700<small class="text-body-secondary fw-light lead px-2">/キログラム</small></h1>
        <ul class="mt-3 mb-4 px-5">
          <li class="lead fw-bold list-unstyled">注文情報:</li></br>
          <li class="lead">一人分5キログラムまで、OK</li></br>
          <li class="lead">✉ メールサポート</li></br>
          <li class="lead">☎ 電話サポート</li></br>
        </ul>
        <a href="/order" style="text-decoration: none;">
          <button type="button" class="w-50 btn btn-lg btn-outline-primary d-grid gap-2 col-6 mx-auto">ブレンド珈琲を選択</button>
        </a>
      </div>
    </div>
    <div class="col-md-5 card-bg3 link-zoom">
      <div class="card-bg3" onclick="window.location.href='/order';">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </svg>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

</div>

@endsection