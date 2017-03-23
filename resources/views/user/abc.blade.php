@extends('layouts.master')

@section('title')
Cart
@endsection

@section('content')
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                   
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
     <!--           <script type="text/javascript">
                    function updater(id,val){
                        alert(val);
                        redirector('/cart-update/id/val');
                    }  
                </script> -->
            
          <!--          @foreach($cart as $item)
                    <tr>
                         <td class="cart_description">    
                            <p>{{$item->name}}</p>
                        </td>
                        <td class="cart_price">
                            <p>&#8377;{{$item->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="/cart-update/{{$item->rowId}}/{{$item->qty+1}}"> + </a>
                                <input class="cart_quantity_input" type="text" onchange="window.location='/cart-update/{{$item->rowId}}/'+this.value" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href="/cart-update/{{$item->rowId}}/{{$item->qty-1}}"> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">&#8377;{{$item->subtotal}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach  -->
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
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
                </tbody>
			</table>
			<div id="cart-total" class="pull-right" style="margin-right: 200px">{{Cart::subtotal()}}</div>
            <br/><br/>
            <div class="pull-right" style="margin-right: 200px"><button class="btn btn-success" onclick="redirector('/order')">Order</button></div>
        </div>
        <br/>
 @endsection