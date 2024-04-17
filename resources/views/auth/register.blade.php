<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <!-- Подключаем Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .form-container {
      max-width: 400px;
      /* Задайте максимальную ширину формы */
      margin: 0 auto;
      /* Центрируйте форму по горизонтали */
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="mt-4 text-center" style="text-shadow: 1px 1px 2px rgb(142,64,42);">登録フォーム</h1>
        <div class="form-container border px-3 pb-3">
          <form method="POST" action="{{ route('register') }}" class="mt-3">
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label"><span class="fs-6 me-1 text-bg-danger px-1">必須</span>名前 (フルネーム)</label>
              <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required autocomplete="name" placeholder="例）村上春樹">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label"><span class="fs-6 me-1 text-bg-danger px-1">必須</span>✉ メールアドレス</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autocomplete="email" placeholder="例）info@example.com">
            </div>

            <div class="mb-3">
              <label for="email-confirm" class="form-label"><span class="fs-6 me-1 text-bg-danger px-1">必須</span>✉ メールアドレス確認</label>
              <input id="email-confirm" type="email" name="email_confirmation" value="{{ old('email') }}" class="form-control" required autocomplete="email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label"><span class="fs-6 me-1 text-bg-danger px-1">必須</span>パスワードを入力</label>
              <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password" placeholder="※ 8～16文字の半角英数">
            </div>

            <div class="mb-3">
              <label for="password-confirm" class="form-label"><span class="fs-6 me-1 text-bg-danger px-1">必須</span>パスワードを再入力確認</label>
              <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-primary">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="text-end mt-3 pt-5 mb-5">
    <a href="/" style="text-decoration: none;">
      <button class="btn btn-outline-secondary align-items-center d-grid col-2 mx-auto mt-5" type="button">
        ホームページへ戻る
      </button>
    </a>
  </div>

  <footer>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-3 px-5 border-top text-black fw-bold">
      <p>© 2024 Coffee Shop. Made by GraY.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/">
            <img src="{{ asset('/images/icons8-instagram.svg') }}" class="bi" width="40" height="40" />
          </a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/">
            <img src="{{ asset('/images/icons8-facebook.svg') }}" class="bi" width="40" height="40" />
          </a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="https://github.com/">
            <img src="{{ asset('/images/icons8-github.svg') }}" class="bi" width="40" height="40" />
          </a></li>
      </ul>
    </div>
  </footer>

  <!-- Подключаем Bootstrap JS и необходимые зависимости -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>