@extends('layout')
@section('title', 'カート内の商品')
@section('content')

<div class="container mt-5">
  <div class="container">
    <form class="float-left mr-3" action="/cart/delete" method="post">
      <?= csrf_field()?>
      <input type="submit" value="カートすべて消去">
    </form>

    <form action="/cart" method="post">
      <?= csrf_field()?>
      <input type="submit" value="shopに戻る">
    </form>
  </div>
  <div class="d-flex flex-wrap">
  <?php foreach($cartItems as $index => $item): ?>
    <div class="card small mr-2 mb-2">
      <div class="card-header">
        <h2 class="card-title"><a href="/item/<?=$item->id?>"><?=$item->name?></a></h1>
      </div>
      <div class="card-body">
        <img class="card-img-top" src="<?=$item->img?>" />
      </div>

      <div class="card-footer">
        <p class="Appraisal"><?=$item->Appraisal?></p>
        <p class="price">￥<?=$item->price?></p>
        <form action="/cart_delete" method="post">
          <input type="hidden" name="cart_index" value="<?=$index?>">
          <?= csrf_field()?>
          <input type="submit" value="カートから消去">
        </form>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
@endsection
