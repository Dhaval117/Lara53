<html> 
<head><title>User Codes</title></head> 
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
 <th>Code</th> 
 <th>Table</th>
</tr> 
<?php $i=1; ?>
@foreach ($codes as $code) 
 <tr> 
  <td> {{ $i++}} </td>
  <td>{{ $code->code }}</td>
  <td></td>  
 </tr> 
@endforeach 
</table> 

<ul>
        <li><a href='/insert'>Add Items</a></li>
        <li><a href='/edit-items'>Update Items</a></li>
        <li><a href='/delete-items'>Delete Items</a></li>
        <li><a href='/view-items'>View Items</a></li>
        <li><a href='/view-orders'>View Orders</a></li>
  </ul>
</body>  
</html>