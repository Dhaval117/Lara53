<html> 
<head><title>View Items</title></head> 
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form-basic.css">
<link rel="stylesheet" href="css/demo.css">
<body> 
<table class="responstable"> 
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

<ul>
        <li><a href='/insert'>Add Items</a></li>
        <li><a href='/edit-items'>Update Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
        <li><a href='/view-items'>View Items</a></li>
  </ul>
</body>  
</html>