<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>注文済み</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <style>
    body {
      background-image: url('<?php echo asset('/images/182217-abstract-pastel-brown-graphic-background.jpg'); ?>');
      background-size: cover;
      /* чтобы фон занимал всю доступную область */
      background-position: center;
      /* чтобы фон был выровнен по центру */
      background-repeat: no-repeat;
      /* чтобы фон не повторялся */
      /* Добавил цвет фона для примера */
    }
  </style>
</head>

<body>
  <h1>CoffeeShopでのご注文が完了しました。2日以内にご連絡いたします。</h1>
  <p>ご注文内容:</p>
  <ul>
    <li>お名前: {{ $order->name }}</li>
    <li>メールアドレス: {{ $order->email }}</li>
    <li>珈琲種: {{ $order->coffee_types }}</li>
    <li>数量（キログラム）: {{ $order->quantity }}</li>
    <li>配送先住所: {{ $order->address }}</li>
    <li>合計: ${{ $order->total_price }}</li>
  </ul>
</body>

</html>