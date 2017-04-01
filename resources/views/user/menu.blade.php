@extends('layouts.master')

@section('title')
Menu
@endsection

@section('content')
<br/>
<div class="menu">
		<div class="container">
			
			<h3>Menu</h3>
			<p class="nihil">Our Items</p>
			<?php $count=0; $counter=-1; ?>
			{{ csrf_field()}}
			@foreach($items as $item)
			<?php $count++; $counter++; ?>
			<div class="menu-grids">
				<div class="col-md-4 menu-grid">
					<div class="menu-grd">
						<img src="<?php echo'images/'.$item->Item_Name.'.jpg' ?>" alt=" {{$item->Item_Name}}" class="img-responsive set-img" />
						<h4>{{$item->Item_Name}}</h4>
						<p>{{$item->Item_Description}}</p>
						<div class="menu-grd-pos">
							<p>&#8377;{{$item->Item_Price}}</p>
						</div>
						<div class="row">
						<div class="col-xs-3">
			<!--data-id="{{$item->Item_ID}}" data-name="{{$item->Item_Name}}" data-price="{{$item->Item_Price}}"-->			
						<button class="btn btn-success cartadd" data-id="{{$item->Item_ID}}" data-name="{{$item->Item_Name}}" data-price="{{$item->Item_Price}}">Add</button>
						</div>
						<div class="col-xs-2"></div>
						<div class="col-xs-7">
							<input class="qty" style="display:none ; width:50px"  type="number" min="0" value="1" max="{{$item->Availability}}">
						</div>
						</div>
					</div>
				</div>
			<?php 
				if($count>2){
					$count = 0;
					echo '<div class="clearfix"> </div>';
				}
			?>
			</div>
			@endforeach
			<div class='clearfix'></div>

		<!--	<button class="btn btn-success" onclick="check()">Checkout</button>  -->
		</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">    
    	    <div class="modal-body">
            <h2>Added to cart</h2>
            </div>
        </div>
    </div>
</div>
@endsection