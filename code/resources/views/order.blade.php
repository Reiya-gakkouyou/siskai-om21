@extends('layout')
@section('title', 'オーダー')
@section('content')

<div class="container">
  <form action="/order" method="POST">
      <?=csrf_field()?>
    <table class="table table-dark">
      <thead>
        <tr>
          <th  scope="col" class="text-white">oerderseet</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><label class="text-white" for="name">名前：</label></td>
          <td><input type="text" name="name" value="<?=$inputs["name"]??''?>"></td>
        </tr>
        <tr>
          <td>
            <label class="text-white" for="address">住所：</label>
          </td>
          <td>
            <input type="text" name="address" value="<?=$inputs["name"]??''?>">
          </td>
        </tr>
        <tr>
          <td><label class="text-white" for="tell">電話番号：</label></td>
          <td><input type="text" value="" name="tel"></td>
        </tr>
        <tr>
          <td><label class="text-white" for="email">Email：</label>
          <td><input type="text" value="" name="email"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" class="d-block mx-auto text-center" value="注文"></td>
        </tr>
      </tbody>
    </table>
  </form>

</div>
@endsection
