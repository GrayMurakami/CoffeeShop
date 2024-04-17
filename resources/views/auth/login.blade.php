<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    body {
      align-items: center;
      justify-content: center;
      background-image: url('<?php echo asset('/images/182217-abstract-pastel-brown-graphic-background.jpg'); ?>');
      background-size: cover;
      /* чтобы фон занимал всю доступную область */
      background-position: center;
      /* чтобы фон был выровнен по центру */
      background-repeat: no-repeat;
      /* чтобы фон не повторялся */
      /* Добавил цвет фона для примера */
    }

    .form-signin {
      max-width: 400px;
      /* Ширина формы */
      padding: 25px;
      background-color: #000;
      /* Цвет фона формы */
      border-radius: 5px;
      /* Скругление углов формы */
      box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1);
      /* Тень формы */
    }

    .footer_down {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary mb-5 pb-5">
  <main class="form-signin w-100 m-auto">
    <form action="{{ route('login-action') }}" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-white text-center">ログインをしてください</h1>

      <div class="form-floating mb-1">
        <input id="email" type="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
        <label for="email">メールアドレス</label>
      </div>
      <div class="form-floating">
        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
        <label for="password">パスワード</label>
      </div>

      <div class="form-check text-start my-3 text-white">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          保存
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">ログイン</button>
    </form>

    <div class="text-end mt-3 pt-5">
      <a href="/" style="text-decoration: none;">
        <button class="btn btn-outline-secondary align-items-center" type="button">
          ホームページへ戻る
        </button>
      </a>
    </div>
    <p class="mt-3 mb-1 text-white text-end">© 2024</p>
  </main>

  <footer class="footer_down">
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

</html>