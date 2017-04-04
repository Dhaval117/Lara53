@extends('layouts.app')

@section('title')
View Orders
@endsection
 
@section('content')
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr class="success"> 
 <th>ID</th> 
 <th>Name</th>
 <th>Price</th>
 <th>Quantity</th>
 <th>Date & Time</th>
</tr> 
</thead>
<tbody>
@foreach ($orders as $order) 
 <tr> 
  <td>{{ $order->Order_ID }}</td> 
  <td>{{ $order->Item_Name }}</td>
  <td>{{ $order->Item_Price }}</td>
  <td>{{ $order->Quantity }}</td>
  <td>{{ $order->created_at }}</td> 
 </tr> 
@endforeach
</tbody> 
</table> 
</div>
@endsection