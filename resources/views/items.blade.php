@extends('layout')

@section('title', 'SHOP')
@section('content')

<div class="container mt-5">
  <div class="d-flex flex-wrap">
    <form action="/search" method="GET">
    <input type="text" name="searchkey" value="">
    <input type="submit" value="検索">
</form>
  <?php foreach($items as $item): ?>
    <div class="card small">
      <div class="sal">
        <div class="card-header bg-light p-2">
          <h2 class="card-title"><a href="/item/<?=$item->id?>"><?=$item->name?></a></h1>
        </div>
        <div class="card card-body bg-light p-2">
          <img class="card-img-top" src="<?=$item->img?>" />
        </div>
        <form class="card-footer bg-light p-2" action="/cart/add" method="post">
          <?= csrf_field()?>
          <input type="hidden" name="item_id" value="<?=$item->id?>">
          <p class="Appraisal"><?=$item->Appraisal?></p>
          <p class="price">￥<?=$item->price?></p>
          <input class="mx-auto" type="submit" value="カートに追加">
        </form>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>

@endsection
