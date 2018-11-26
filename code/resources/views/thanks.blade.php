<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>jewelry</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/ce.css" />
</head>
<tbody>
<h1><p class="thx">注文ありがとうございました。</p></h1>

<form class="thx-bottan" action="/cart" method="post">
  <?= csrf_field()?>
  <input type="submit" value="shopに戻る">
</form>
</tbody>
</html>
