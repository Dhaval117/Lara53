<html> 
<head><title>View Items</title></head> 
<body> 
<table border=1> 
<tr> 
 <td>ID</td> 
 <td>Name</td>
 <td>Price</td>
 <td>Quantity</td>
</tr> 
@foreach ($orders as $order) 
 <tr> 
  <td>{{ $order->Order_ID }}</td> 
  <td>{{ $order->Item_Name }}</td>
  <td>{{ $order->Item_Price }}</td>
  <td>{{ $order->Quantity }}</td> 
 </tr> 
@endforeach 
</table> 

<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
<p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
<p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>
</body>  
</html>