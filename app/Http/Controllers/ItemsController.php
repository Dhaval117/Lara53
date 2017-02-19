<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function insertform(){
    	return view('admin.item_add');
    }

    public function insert(Request $request){
    $name = $request->input('item_name');
	  $price = $request->input('item_price');
	  $ingredients = $request->input('item_ingredients');
	  $description = $request->input('item_description');
	  $availability = $request->input('availability');
	  DB::insert('insert into items (Item_Name,Item_Price,Item_Ingredients,Item_Description,Availability) values(?,?,?,?,?)',[$name,$price,$ingredients,$description,$availability]); 
	  echo "Record inserted successfully.<br/>"; 
	  echo '<a href="/insert">Click Here</a> to go back.';
    echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
          <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
          <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
          <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>";
    }

    public function index(){
    	$items = DB::select('select * from items'); 
  		return view('admin.item_view',['items'=>$items]);
    }

    public function editform(){ 
  		$items = DB::select('select * from items'); 
  		return view('admin.item_edit',['items'=>$items]); 	
 	}
  
    public function newval($id) 
    { 
        $items = DB::select('select * from items where Item_ID = ?',[$id]); 
  		return view('admin.item_update',['items'=>$items]); 
    } 

    public function edit(Request $request,$id) 
    { 
  		$name = $request->input('item_name');             //item_name is name of input field in form
  		$price = $request->input('item_price');
	  	$ingredients = $request->input('item_ingredients');
	  	$description = $request->input('item_description');
	  	$availability = $request->input('availability');
  		DB::update('update items set Item_Name = ?, Item_Price = ?,Item_Ingredients = ?,Item_Description = ?,Availability = ? where Item_ID = ?',[$name,$price,$ingredients,$description,$availability,$id]); 
  		echo "Record updated successfully.<br/>"; 
  		echo '<a href="/view-items">Click Here</a> to go back.';
      echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
            <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
            <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
            <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>"; 
    }

    public function deleteform(){
    	$items = DB::select('select * from items'); 
  		return view('admin.item_delete',['items'=>$items]);
    }

    public function destroy($id){
    	DB::delete('delete from items where Item_ID = ?',[$id]); 
  		echo "Record deleted successfully.<br/>"; 
  		echo '<a href="/delete-items">Click Here</a> to go back.';
      echo "<p><a href='/insert'><button class='btn btn-success'>Add Items</button></a></p>
            <p><a href='/view-items'><button class='btn btn-success'>View Items</button></a></p>
            <p><a href='/edit-items'><button class='btn btn-success'>Update Items</button></a></p>
            <p><a href='/delete-items'><button class='btn btn-success'>Delete Items</button></a></p>";
    }
}
