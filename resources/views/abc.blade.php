@extends('layouts.master')

@section('title')
Cart
@endsection

@section('content')
<?php $cart = Cart::content(); ?>
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                   
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <script type="text/javascript">
                    function updater(id,val){
                        alert(val);
                        redirector('/cart-update/id/val');
                    }
                </script>
                    @foreach($cart as $item)
                    <tr>
                       
                        <td class="cart_description">
                            
                            <p>{{$item->name}}</p>
                        </td>
                        <td class="cart_price">
                            <p>${{$item->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="/cart-update/{{$item->rowId}}/{{$item->qty+1}}"> + </a>
                                <input class="cart_quantity_input" type="text" onchange="window.location='/cart-update/{{$item->rowId}}/'+this.value" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href="/cart-update/{{$item->rowId}}/{{$item->qty-1}}"> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">${{$item->subtotal}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
                </tbody>
			</table>
			{{Cart::subtotal()}}

            <button class="btn btn-success" onclick="redirector('/order')">Order</button>
        </div>
 @endsection