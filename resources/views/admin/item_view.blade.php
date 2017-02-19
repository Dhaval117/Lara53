<html> 
<head><title>View Items</title></head> 
<body> 
<table border=1> 
<tr> 
 <td>ID</td> 
 <td>Name</td>
 <td>Price</td>
 <td>Ingredients</td>
 <td>Description</td>
 <td>Availability</td>
</tr> 
@foreach ($items as $item) 
 <tr> 
  <td>{{ $item->Item_ID }}</td> 
  <td>{{ $item->Item_Name }}</td>
  <td>{{ $item->Item_Price }}</td>
  <td>{{ $item->Item_Ingredients }}</td>
  <td>{{ $item->Item_Description }}</td>
  <td>{{ $item->Availability }}</td> 
 </tr> 
@endforeach 
</table> 

<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
<p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
<p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>
</body>  
</html> 