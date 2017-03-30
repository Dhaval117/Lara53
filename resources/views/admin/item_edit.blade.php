<html> 
<head><title>View Items | Edit</title>
<!--<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form-basic.css"> -->
<link rel="stylesheet" href="css/demo.css"> 
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head> 
<body> 
<div class="table-responsive">
<table class="table table-striped"> 
<thead>
<tr> 
 <th>ID</th> 
 <th>Name</th>
 <th>Price</th>
 <th>Ingredients</th>
 <th>Description</th>
 <th>Availability</th>
 <th>EDIT</th>
</tr> 
</thead>
<tbody>                                              <?php    //Item_ID is name of column in database ?>
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
</tbody>
</table>
</div> 
<ul>
       <li> <a href='/view-orders'>View Orders</a></li>
        <li><a href='/insert'>Add Items</a></li>
        <li><a href='/view-items'>View Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
  </ul>

</body>  
</html>