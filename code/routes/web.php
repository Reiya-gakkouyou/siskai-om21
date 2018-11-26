<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",function(){
    $items = DB::select("SELECT * FROM items");
    return view("items",[
      "items" => $items
    ]);
});

Route::get("/item/{id}",function($id){
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        return view("item_detail",[
          "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::get("/cart/list",function(){
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);

    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::post("/cart/add",function(){
    // フォームから IDを読み込みDBへ問い合わせる
    $id = request()->get("item_id");
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        // セッションにデータを追加して格納
        $cartItems = session()->get("CART_ITEMS",[]);
        $cartItems[] = $items[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});

Route::post("/cart_delete", function(){
  $cartItems = session()->get("CART_ITEMS",[]);
  $index = request()->get("cart_index");
  unset($cartItems[$index]);
  session()->forget('CART_ITEMS');
  session()->put("CART_ITEMS", $cartItems);
  return redirect("/cart/list");
});

Route::post("/cart/delete",function(){
  session()->forget('CART_ITEMS');
  return redirect("/cart/list");
});
Route::post("/cart/reterun",function(){
  return redirect("/cart/list");
});
Route::post("/cart",function(){
  return redirect("/");
});
 Route::get("/Home",function(){
   return view("Home");
 });




Route::get("/order",function(){
    return view("order");
});

Route::get("/order/thanks",function(){
    return view("thanks");
});
Route::post("/order",function(){

    $error = false; //フォームにエラーが有るかどうか
    $errorMessage = []; // エラーメッセージ

    if(request()->get("name") == ""){
        $error = true;
        $errorMessage[] = "名前を入力してください";
    }
    if(request()->get("address") == ""){
        $error = true;
        $errorMessage[] = "名前を入力してください";
    }

    if($error){
        session()->put("FORM_MESSAGES",$errorMessage);
        session()->put("OLD_FORM",request()->all());
        return redirect("/order");
    }



    return redirect("/order/thanks");
});

Route::get("/order",function(){
    $errors = session()->get("ERRRO_MESSAGES",[]);
    $inputs = session()->get("OLD_FORM",[]);
    session()->get("ERROR_MESSAGES");
    session()->get("OLD_FORM");
    return view("order",[
        "inputs" => $inputs,
        "errors" => $errors,
    ]);
});
