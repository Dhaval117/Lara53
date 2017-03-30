<html> 
<head><title>View Items</title></head> 
<!--<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form-basic.css"> -->
<link rel="stylesheet" href="css/demo.css"> 
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<body> 
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr> 
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
<ul >
        <li><a href='/insert'>Add Items</a></li>
        <li><a href='/edit-items'>Update Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
        <li><a href='/view-items'>View Items</a></li>
  </ul>
</body>  
</html>