<html> 
<head><title>Add Items</title></head> 
<body> 
<form action="/create" method="post"> 
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
<table> 
 <tr> 
  <td>Item_Name</td> 
  <td><input type='text' name='item_name' /></td> 
 </tr>
 <tr> 
  <td>Item_Price</td> 
  <td><input type='text' name='item_price' /></td> 
 </tr>
 <tr> 
  <td>Item_Ingredients</td> 
  <td><textarea name='item_ingredients'></textarea></td> 
 </tr> 
 <tr> 
  <td>Item_Description</td> 
  <td><textarea name='item_description' ></textarea></td> 
 </tr>
 <tr> 
  <td>Availability</td> 
  <td><input type='text' name='availability' /></td> 
 </tr>
 <tr> 
  <td colspan='2'><input type='submit' value="Insert" /></td> 
 </tr> 
</table> 
</form> 
<p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
<p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
<p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>
</body>  
</html> 