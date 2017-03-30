@extends('layouts.master')

@section('title')
Cart
@endsection

@section('content')
    <br/>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{csrf_field()}}
                    @foreach($cart as $item)
                        <tr class="item{{$item->id}}">
                        <td><p class="itemname">{{$item->name}}</p></td>
                        <td><p class="itemprice">{{$item->price}}</p></td>
                        <td>
                        <input type="number" min="1" class="itemqty" style="width:50px" value="{{$item->qty}}" pattern="[0-9]+" data-id='{{$item->id}}' data-rowid="{{$item->rowId}}" data-price='{{$item->price}}'>
                        </td>
                        <td><p class="itemcost">{{$item->subtotal}}</p></td>
                        <td><button class="btn btn-danger removeitem" data-id="{{$item->id}}" data-msg="remove" data-rowid="{{$item->rowId}}">Delete</button> </td>
                    @endforeach
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div id="cart-total">{{Cart::subtotal()}}</div></td>
                        <td><button class="btn btn-success" onclick="redirector('/order')">Order</button></td>
                </tbody>
			</table>
        </div>
        
 @endsection