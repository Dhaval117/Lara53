<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- {{ config('app.name', 'Laravel') }} --> 
    <title>Add items</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head> 
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Insert Items</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('item_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item_Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="item_name" value="{{ old('item_name') }}" required autofocus>

                                @if ($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('item_price') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item_Price</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="item_price" value="{{ old('item_price') }}" required>

                                @if ($errors->has('item_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('item_ingredients') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item_Ingredients</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="item_ingredients" value="{{ old('item_ingredients') }}" required >

                                @if ($errors->has('item_ingredients'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_ingredients') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('item_description') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item_Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="item_description" value="{{ old('item_description') }}" required >

                                @if ($errors->has('item_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('availability') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Availability</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="availability" value="{{ old('availability') }}" required>

                                @if ($errors->has('availability'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('availability') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Insert
                                </button>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>

<!--
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
-->
</body>  
</html> 