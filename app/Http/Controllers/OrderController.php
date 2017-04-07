<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class OrderController extends Controller
{
    public function order(){
        $content = Cart::content();
        $order_id = session('pwd');
        foreach($content as $row){
        DB::insert('insert into orders (Order_ID,Item_Name,Item_Price,Quantity,Total) values(?,?,?,?,?)',[$order_id,$row->name,$row->price,$row->qty,$row->subtotal]);
        DB::update("update items set Availability = (Availability - $row->qty) where Item_Name = ?",[$row->name]);
        }
        Cart::destroy();
        //session()->forget('pwd');
        return redirect()->to('/myorder');
    }

    public function generate($code){
        $bill = DB::select('select * from orders where order_ID = ? ',[$code]);
        DB::delete('delete from codes where code = ?',[$code]);
        return view('admin.print_bill',['bill'=>$bill]);        
    }

    public function check($code='aaa'){
        if(DB::select('select * from codes where code = ? ',[$code])) {
            session(['pwd'=>$code]);
          //  session(['opwd'=>$code]); 
            return redirect()->to('/order');
        }
        else{
            return redirect()->to('/wrongpwd');
        }
    }

    public function check_code(){
        if(session('pwd')){
            $password = session('pwd');
            return redirect()->to('/check/'.$password);
        }else{
            echo ' <script type="text/javascript">
                var password = prompt("Please ask waiter for 6 digit code");
                if(password != "" && password != null)
                    window.open("/check/"+password,"_self");
                else
                    window.open("/abc","_self");
                </script>
            ';
        }
    }

    public function endsession(){
        session()->forget('pwd');
        return redirect()->to('/menu');
    }
}
