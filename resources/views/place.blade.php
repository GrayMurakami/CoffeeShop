@extends('layout')

@section('title')珈琲の場@endsection

@section('main_content')

<?php
// ПОДКЛЮЧЕНИе
echo "<link rel='stylesheet' href=/coffee_variety.css>";
echo "<link rel='stylesheet' href=/coffee_common.css>";
echo "<link rel='stylesheet' href=/coffee_reset.css>";
?>

<style>
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

<main class="main">
  <div class="wrapper">
    <section class="section-place">
      <h2 class="heading02 fw-bold pt-5 mt-5 text-center mb-5" style="text-shadow: 1px 1px 2px rgb(142,64,42);"><span>商品を供給する場所</span></h2>
      <p class="fs-5 text-body-secondary pt-4">
        ブラジルのコーヒー生産量は世界の約3分の1であります。ブラジルは150年にわたり、地球上で最大の珈琲生産国である。
        2009年、ブラジルは世界のコーヒーの32%、アラビカ種の46%供給している。ブラジルの輸出総量180万トン以上である。
      </p>
      <div class="row align-item-center mt-5 pe-4 mb-5 pb-5">
        <div class="col-md-6 text-end px-4"><img src="{{ asset('/images/img_place.jpg') }}" alt="place" width="300" height="400"></div>
        <div class="col-md-6 ps-2 pt-5">
          <address class="address">
            <dl>
              <dt class="py-2 form-label fs-3">アクセス</dt>
              <dd class="access-desc border px-2">
                <div class="place-name py-2">State of Bahia in Brazil</div>
                <div class="address">
                  <div class="address-text py-2">
                    ブラジル、バイーア州、ラウロ・デ・フレイタス、エストラーダ・ド・ココ<br>
                    Brazil, Bahia, Lauro de Freitas, Estrada do Coco
                  </div>
                  <div class="address-contact py-2">
                    Postal Code: 42700-000</br>
                    Tel: (71) 3287-9700
                  </div>
                </div>
              </dd>
            </dl>
          </address>
        </div>
      </div>
      <h2 class="heading02 fw-bold text-center mb-5" style="text-shadow: 1px 1px 2px rgb(142,64,42);"><span>マップで調べる</span></h2>
      <div class="map text-center pb-5 pt-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7949537.596659195!2d-47.26229009295056!3d-13.374499827151633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x716037ca23ca5b3%3A0x7e926f5fb491ed05!2z0JHQsNC40Y8sINCR0YDQsNC30LjQu9C40Y8!5e0!3m2!1sru!2sjp!4v1706075811372!5m2!1sru!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

    @endsection