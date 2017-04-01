@extends('layouts.app')

@section('title')
Items | Update
@endsection
 
@section('content')
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
@endsection