<!DOCTYPE html>
<html lang="jp">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>注文</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <!-- Подключаем Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    .redic {
      color: red;
    }

    .link-zoom {
      color: black;
      transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .link-zoom:hover {
      color: black;
      transform: scale(1.1);
      /* Увеличение ссылки при наведении */
      text-shadow: 5px 5px 10px rgba(142, 64, 42, 0.7);
      /* Свечение букв при наведении */

    }

    .link-zoom:focus {
      outline: none;
    }
  </style>

</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mt-4 text-center mb-4" style="text-shadow: 1px 1px 2px rgb(142,64,42);">新しい注文</h2>
        <div class="form-container border px-3 pb-3 pt-2">
          <form action="{{ route('order.processOrder') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name"><span class="fs-6 me-1 redic px-1">[必須]</span>お名前:</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="form-group">
              <label for="email"><span class="fs-6 me-1 redic px-1">[必須]</span>メールアドレス:</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
              <label for="coffee_types"><span class="fs-6 me-1 redic px-1">[必須]</span>珈琲種の選択肢:</label>
              <select class="form-control" name="coffee_types[]" id="coffee_types" multiple required>
                <option value="Арабика" data-price="800">アラビカ種</option>
                <option value="Робуста" data-price="600">ロブスタ種</option>
                <option value="Либерика" data-price="700">ブレンドコーヒー</option>
              </select>
            </div>

            <div class="form-group">
              <label for="quantity"><span class="fs-6 me-1 redic px-1">[必須]</span>数量（キログラム）:</label>
              <input type="number" class="form-control" name="quantity" id="quantity" required>
            </div>

            <div class="form-group">
              <label for="address"><span class="fs-6 me-1 redic px-1">[必須]</span>配送先住所:</label>
              <textarea class="form-control" name="address" id="address" required></textarea>
            </div>


            <!-- <input type="hidden" name="price_per_kg" value="100"> -->

            <div class="form-group">
              <label for="coffee_price">合計:</label>
              <input type="text" name="coffee_price" id="coffee_price" class="form-control" readonly>
            </div>

            <script>
              // Получаем элемент выбора кофе
              var coffeeSelect = document.getElementById('coffee_types');
              // Получаем поле для отображения цены
              var priceField = document.getElementById('coffee_price');

              // Функция для обновления цены при изменении выбора кофе
              function updatePrice() {
                // Получаем выбранный вариант кофе
                var selectedCoffee = coffeeSelect.options[coffeeSelect.selectedIndex];
                // Получаем цену из атрибута data-price
                var price = selectedCoffee.getAttribute('data-price');
                // Обновляем поле для отображения цены
                priceField.value = price;
              }

              // Вызываем функцию updatePrice при изменении выбора вида кофе
              coffeeSelect.addEventListener('change', updatePrice);

              // Вызываем функцию updatePrice при загрузке страницы, чтобы отобразить начальную цену
              updatePrice();
            </script>

            <button type="submit" class="btn btn-primary">注文</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <ul class="nav justify-content-center pt-5 mt-5 pb-2">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary link-zoom fw-bold">ホームページ</a></li>
      <li class="nav-item"><a href="/variety" class="nav-link px-2 text-body-secondary link-zoom fw-bold">商品情報</a></li>
      <li class="nav-item"><a href="/place" class="nav-link px-2 text-body-secondary link-zoom fw-bold">珈琲の場</a></li>
      <li class="nav-item"><a href="/review" class="nav-link px-2 text-body-secondary link-zoom fw-bold">フィードバック</a></li>
    </ul>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-3 px-5 border-top text-black fw-bold">
      <p>© 2024 Coffee Shop. Made by GraY.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3 px-2"><a class="link-body-emphasis" href="https://www.instagram.com/">
            <img src="{{ asset('/images/icons8-instagram.svg') }}" class="bi" width="40" height="40" />
          </a></li>
        <li class="ms-3 px-2"><a class="link-body-emphasis" href="https://www.facebook.com/">
            <img src="{{ asset('/images/icons8-facebook.svg') }}" class="bi" width="40" height="40" />
          </a></li>
        <li class="ms-3 px-2"><a class="link-body-emphasis" href="https://github.com/">
            <img src="{{ asset('/images/icons8-github.svg') }}" class="bi" width="40" height="40" />
          </a></li>
      </ul>
    </div>
  </footer>

</body>

</html>