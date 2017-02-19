<html> 
<head><title>View Items | Edit</title></head> 
<body> 
<table border="1"> 
<tr> 
 <td>ID</td> 
 <td>Name</td>
 <td>Price</td>
 <td>Ingredients</td>
 <td>Description</td>
 <td>Availability</td> 
 <td>Delete</td> 
</tr>                                              <?php    //Item_ID is name of column in database ?>
@foreach ($items as $item) 
 <tr> 
  <td>{{ $item->Item_ID }}</td>                     
  <td>{{ $item->Item_Name }}</td>
  <td>{{ $item->Item_Price }}</td>
  <td>{{ $item->Item_Ingredients }}</td>
  <td>{{ $item->Item_Description }}</td>
  <td>{{ $item->Availability }}</td> 
  <td><a href='delete/{{ $item->Item_ID }}'>Delete</a></td> 
 </tr> 
@endforeach 
</table> 

<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
<p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
<p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>

</body>  
</html>