@extends('layouts.master')

@section('title')
MyOrder
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php $amount = 0; ?>
                    @foreach($order as $item)
                        <tr>
                        <td>{{$item->Item_Name}}</td>
                        <td>&#8377;{{$item->Item_Price}}</td>
                        <td>{{$item->Quantity}}</td>
                        <td>&#8377;{{$item->Total}}</td>
                        </tr>
                        <?php $amount = $amount + $item->Total; ?>
                    @endforeach
                        <tr class="success">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>&#8377;{{$amount}}</b></td>
                        </tr>
                </tbody>
			</table>
        </div>
        <br/>
 @endsection