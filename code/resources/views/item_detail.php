<h1>商品個別ページ</h1>
<p>商品名：　<?=$item->name?></p>
<p>説明： <?=$item->description ?></p>
<img src="<?=$item->img?>"/>
<p>価格: <?=$item->price?></p>
<p>鑑定書：<?=$item->Appraisal?></p>

<form action="/cart/add" method="post">
  <?= csrf_field()?>
  <input type="hidden" name="item_id" value="<?=$item->id?>">
  <input type="submit" value="カートに追加">
</form>

<form action="/cart/reterun" method="post">
  <?= csrf_field()?>
  <input type="submit" value="cartに戻る">
</form>
