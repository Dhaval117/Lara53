<html> 
<head><title>Bill Generation</title>
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
 <th>Generate</th>
</tr> 
</thead>
<tbody>
<?php $i=1; ?>
@foreach ($codes as $code) 
 <tr> 
  <td>{{ $i++}} </td>
  <td>{{ $code->code }}</td>
  <td><a href="/generate/{{$code->code}}" class="btn btn-primary">Generate Bill</a></td>  
 </tr> 
@endforeach
</tbody> 
</table> 
</body>  
</html>