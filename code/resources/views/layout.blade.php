<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>jewelry</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/ce.css" />
</head>
<body>
  <div class="nav">
    <div class="container">
      <ul class="nav nav-tabs">
      <h1 class="rogo">@yield('title')</h1>
        <li class="nav-item">
          <a class="nav-link" href="/Home">HOME</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/">商品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cart/list">cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/order">order</a>
          </li>
        </ul>
      </div>
    </div>
  @yield('content')
</body>
</html>
