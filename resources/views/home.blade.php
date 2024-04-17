@extends('layout')

@section('title')ホームページ@endsection

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

  /* Стили для обертки изображений */
  .variety-img {
    margin-bottom: 20px;
  }

  .variety-img img {
    max-width: 100%;
    height: auto;
  }

  .variety-name-en {
    display: inline-block;
    position: relative;
  }

  .variety-name-en::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50%;
    background-color: rgba(162, 95, 42, 0.5);
    /* Здесь указывается цвет для выделения */
    z-index: -1;
  }
</style>

<body>
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="row">
      <div class="col-lg-6 px-0">
        <h1 class="display-4 fst-italic" style="color: rgb(108,59,42);">コーヒーショップへようこそ。</h1>
        <p class="lead mt-5 ps-2">ここでは、コーヒーに関するちょっとした情報や、</br>
          最も基本的なコーヒーの種類を知ることができます。</br>
          ご意見、ご感想はいつでもお待ちしております。</p>
      </div>
      <div class="col-lg-4 px-0" style="margin-left: 120px;">
        <img src="{{asset('/images/IMG_0717.jpg')}}" width="300" alt="Title Image" class="img-fluid">
      </div>
    </div>
  </div>

  <main class="main">
    <div class="container">
      <div class="lead mb-5">
        <div class="lead-title mt-5 fw-bold">様々なフレーバー</div>
        コーヒーの歴史は何千年にも遡り、多くの興味深い事実がある。コーヒー豆の生産は世界経済において大きなシェアを占めている。世界中にある品種の正確な数を数えるのは難しく、専門家は100種類以上と呼んでいる。各品種にはそれぞれ特徴的な風味、香り、後味があり、それが飲み物のユニークな個性を作り出している。風味の形成とコーヒー豆の生産価格は、農園の場所、気候条件、土壌、水分レベル、収穫時期、豆の加工方法によって左右される。
      </div>
    </div>
    <section class="variety-category">
      <h2 class="heading02 heading02--variety text-center mb-5 fw-bold p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" style="color: rgb(117,51,19);"><span>珈琲</span></h2>
      <div class="row pb-5">
        <div class="col-md-4">
          <div class="variety">
            <div class="variety-img"><img src="{{ asset('/images/coffee_arabica.jpg') }}" alt="arabica"></div>
            <div class="variety-name-en mt-5 mb-3 fw-bold fs-4">アラビカ</div>
            <p class="variety-info form-control border-danger">アラビカ種は柑橘類、フルーティーな香り、チョコレートの魅惑的なアロマ、ほのかな酸味のある明るい風味 - これらはアラビカ種の特徴であり、何百万人ものコーヒー愛好家に愛されています。</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="variety">
            <div class="variety-img"><img src="{{ asset('/images/coffee_robusta.jpg') }}" alt="robusta"></div>
            <div class="variety-name-en mt-5 mb-3 fw-bold fs-4">ロブスタ</div>
            <p class="variety-info form-control border-danger">ロブスタ種はアラビカ種に比べ、よりシンプルで苦味が強く、強い風味を持っています。カフェインが1.5倍近く多いため、爽快感がより強く感じられます。しかし、ロブスタは微妙な香りと風味の遊びがありません。そのため、低級品とされている。</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="variety">
            <div class="variety-img"><img src="{{ asset('/images/coffee_blend.jpg') }}" alt="blend"></div>
            <div class="variety-name-en mt-5 mb-3 fw-bold fs-4">ブレンド</div>
            <p class="variety-info form-control border-danger">ブレンドコーヒーによく見られるフレーバーノートには、チョコレート、ナッツ、キャラメル、フルーツや花の香りがある。出来上がったコーヒーの味は、酸味とコクのバランスがとれた、なめらかでまろやかなものになります。ブレンドコーヒーの利点 ブレンドコーヒーの主な利点の一つは、その多様性です。</p>
          </div>
        </div>
      </div>
    </section>
    </div>
  </main>

</body>
@endsection