<html> 
<head><title>Item | Edit</title></head> 
<body> 
<form action="/edit/<?php echo $items[0]->Item_ID; ?>" method="post"> 
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
<table> 
 <tr> 
  <td>Name</td> 
  <td><input type='text' name='item_name' value='<?php echo $items[0]->Item_Name; ?>' /></td>
</tr>
 <tr> 
  <td>Item_Price</td> 
  <td><input type='text' name='item_price' value='<?php echo $items[0]->Item_Price; ?>'/></td> 
 </tr>
 <tr> 
  <td>Item_Ingredients</td> 
  <td><textarea name='item_ingredients'><?php echo $items[0]->Item_Ingredients; ?></textarea></td> 
 </tr> 
 <tr> 
  <td>Item_Description</td> 
  <td><textarea name='item_description'><?php echo $items[0]->Item_Description; ?></textarea></td> 
 </tr>
 <tr> 
  <td>Availability</td> 
  <td><input type='text' name='availability' value='<?php echo $items[0]->Availability; ?>'/></td> 
 </tr>
 <tr> 
  <td colspan='2'><input type='submit' value="Update Item" /></td> 
 </tr> 
</table> 
</form> 
</body>  
</html> 