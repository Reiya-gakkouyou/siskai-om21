@extends('layout')

@section('title', 'J-weL')
@section('content')

<div class="container text-center">
  <div class="slideshow">
  	<div class="slideContents">
  		<section id="slide1">
  			<img src="/images/Grandidierite.jpg">
  		</section>
  		<section id="slide2">
  			<img src="/images/diamants.jpg">
  		</section>
  		<section id="slide3">
  			<img src="/images/img55460752.jpg">
  		</section>
  		<section id="slide4">
  			<img src="/images/shutterstock_644144647-1024x778.jpg">
  		</section>
  		<section id="slide5">
  			<img src="/images/jwels.jpg">
  		</section>
  	</div>
  </div>
</div>

<h1><p class="main-text">宝石専門のショップ 珍しい宝石も取り扱っております。</p></h1>
<form class="thx-bottan" action="/cart" method="post">
  <?= csrf_field()?>
  <input type="submit" value="shopへ行く">
</form>

@endsection
