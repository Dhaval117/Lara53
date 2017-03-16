<html> 
<head><title>View Items | Edit</title>
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form-basic.css">
<link rel="stylesheet" href="css/demo.css">
</head> 
<body> 
<table class="responstable"> 
<tr> 
 <td>ID</td> 
 <td>Name</td>
 <td>Price</td>
 <td>Ingredients</td>
 <td>Description</td>
 <td>Availability</td> 
 <td>Edit</td> 
</tr>                                              <?php    //Item_ID is name of column in database ?>
@foreach ($items as $item) 
 <tr> 
  <td>{{ $item->Item_ID }}</td>                     
  <td>{{ $item->Item_Name }}</td>
  <td>{{ $item->Item_Price }}</td>
  <td>{{ $item->Item_Ingredients }}</td>
  <td>{{ $item->Item_Description }}</td>
  <td>{{ $item->Availability }}</td> 
  <td><a href='edit/{{ $item->Item_ID }}'>Edit</a></td> 
 </tr> 
@endforeach 
</table> 
<ul>
       <li> <a href='/view-orders'>View Orders</a></li>
        <li><a href='/insert'>Add Items</a></li>
        <li><a href='/view-items'>View Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
  </ul>

</body>  
</html>