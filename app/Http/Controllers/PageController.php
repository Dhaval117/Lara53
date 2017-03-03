<?php

namespace App\Http\Controllers;
use DB;
use Cart;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
    	return view('user.home');
    }

    public function about(){
    	return view('user.about');
    }

    public function menu(){
        $items = DB::select('select * from items'); 
        return view('user.menu',['items'=>$items]);
    }

    public function contact(){
    	return view('user.contact');
    }

    public function admin(){
        return view('auth.login');
    }

    public function base(){
        return view('admin.base');
    }

    public function menu2(){
        $items = DB::select('select * from items'); 
        return view('user.menu2',['items'=>$items]);
    }

    public function checkout(){
        return view('user.checkout');
    }

  /*  public function cart_add($id){
       $item = DB::select('select * from items where Item_ID = ?',[$id]);
       $name = $item[0]->Item_Name;
       $price = $item[0]->Item_Price;
       $quantity = 1;
       DB::insert('insert into carts (Item_Name,Item_Price,Item_Quantity) values(?,?,?)',[$name,$price,$quantity]);
    } */

    public function cart_add($id,$name,$price){
        Cart::add(['id'=>$id,'name'=>$name,'price'=>$price,'qty'=>1]);
        return redirect()->to('/menu');
    }

    public function cart_update($id,$qty){
        Cart::update($id,$qty);
        return redirect()->to('/abc');
    }

    public function abc(){
        return view('abc');
    }

    public function order(){
        $content = Cart::content();
        foreach($content as $row){
        DB::insert('insert into orders (Item_Name,Item_Price,Quantity,Total) values(?,?,?,?)',[$row->name,$row->price,$row->qty,$row->subtotal]);
        }
        Cart::destroy();
        return redirect()->to('/menu');
    }
}
