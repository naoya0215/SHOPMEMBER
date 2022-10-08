<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   
    public function index()
    {
        //ログインしているユーザー情報を取得
        $user = User::findOrFail(Auth::id());
        //ユーザーに紐づいているプロダクト(商品)を取得
        $products = $user->products;
        $totalPrice = 0;

        //複数の商品を一つずつ処理していく
        foreach($products as $product){
            //$product->priceでその商品の料金を取得し
            //【例】三つ商品があれば三つ全ての金額と数量をかけたものをtotalPrice(合計金額として出す)
            $totalPrice += $product->price * $product->pivot->quantity;
        }

        return view('user.cart', 
            compact('products', 'totalPrice'));
    }

    public function add(Request $request)
    {
        //ログインしているユーザーとプロダクトIDを確認して、両方満たすものを取得する
        //商品があるかどうか一件だけ分かればいいのでfirstのメソッドをつける
        $itemInCart = Cart::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        //商品があれば変数itemIncartの中のquantityにさらに数量を足してあげる
        //もしカートに入っているのが一つで、リクエストで二つ入ったとするならば合計三つとなる
        //最後にsaveする事
        if($itemInCart){
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();

        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }

        //カートに商品を入れたらカート画面を出す
        return redirect()->route('user.cart.index');

    }

    public function delete($id)
    {
        //カートの中の商品を検索
        Cart::where('product_id', $id)
        ->where('user_id', Auth::id())
        ->delete();

        return view('user.thankyou');
    }
}
