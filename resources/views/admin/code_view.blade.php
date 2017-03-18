<html> 
<head><title>View Items</title></head> 
<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/form-basic.css">
<link rel="stylesheet" href="css/demo.css">
<body> 
<table class="responstable"> 
<tr> 
 <td>ID</td>
 <td>Code</td> 
</tr> 
<?php $i=1; ?>
@foreach ($codes as $code) 
 <tr> 
  <td> {{ $i++}} </td>
  <td>{{ $code->code }}</td>  
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