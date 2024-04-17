<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    .zoom-on-hover {
      transition: transform 0.3s ease;
    }

    .zoom-on-hover:hover {
      transform: scale(1.5) rotate(-5deg);
    }

    .link-zoom {
      transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .link-zoom:hover {
      transform: scale(1.1);
      /* Увеличение ссылки при наведении */
      text-shadow: 5px 5px 10px rgba(184, 115, 51, 0.7);
      /* Свечение букв при наведении */

    }

    .link-zoom:focus {
      outline: none;
    }
  </style>

</head>

<body>

  <header class="p-3 text-bg-dark">
    <div class="container me-0">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{ asset('/images/coffee.svg') }}" width="40" height="40" class="d-block zoom-on-hover" viewBox="0 0 118 94" role="img" style="margin-left: -60px;" />
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-left: 10px;">
          <li><a href="/" class="nav-link px-3 text-secondary link-zoom">ホームページ</a></li>
          <li><a href="/variety" class="nav-link px-3 text-white link-zoom">商品情報</a></li>
          <li><a href="/place" class="nav-link px-3 text-white link-zoom">珈琲の場</a></li>
          <li><a href="/review" class="nav-link px-3 text-white link-zoom">フィードバック</a></li>
        </ul>

        @auth
        <div class="text-end">
          <div class="d-flex align-items-center">
            <!-- Иконка пользователя -->
            <span class="badge d-flex align-items-center p-1 pe-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-pill fs-5">
              <img class="rounded-circle me-1" width="33" height="33" src="{{ asset('images/original.gif') }}" alt="ユーザーのアイコン">
              {{ Auth::user()->name }}
            </span>

            <!-- Кнопка выхода -->
            <form action="{{ route('logout') }}" method="post" class="ms-4 me-2">
              @csrf
              <button type="submit" class="btn btn-warning">ログアウト</button>
            </form>
          </div>
        </div>

        @else
        <div class="text-end">
          <a href="/login" class="btn btn-outline-light me-2">ログイン</a>
          <a href="/register" class="btn btn-warning">登録</a>
        </div>
        @endauth
      </div>
    </div>
  </header>

  <div class="container">
    @yield('main_content')
  </div>

  <footer>
    <ul class="nav justify-content-center  pt-5 mt-5 pb-2">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary link-zoom fw-bold">ホームページ</a></li>
      <li class="nav-item"><a href="/variety" class="nav-link px-2 text-body-secondary link-zoom fw-bold">商品情報</a></li>
      <li class="nav-item"><a href="/place" class="nav-link px-2 text-body-secondary link-zoom fw-bold">珈琲の場</a></li>
      <li class="nav-item"><a href="/review" class="nav-link px-2 text-body-secondary link-zoom fw-bold">フィードバック</a></li>
    </ul>

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

</body>

</html>