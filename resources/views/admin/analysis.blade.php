@extends('layouts.app')


@section('styles')
<link href="chart/css/style3.css" rel="stylesheet" type="text/css" media="all" />
<script src="chart/js/Chart.js"></script>
@endsection

@section('title')
Top 5 Items
@endsection

@section('content')
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Quantity Sold</th>
			</tr>
		</thead>
		<tbody>
		@foreach($items as $item)
			<tr>
				<td>{{$item->Item_Name}}</td>
				<td>{{$item->SOLD}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

<center>
<div class="area_chart pie_chart">
			<div class="area_chart_left">
				<div class="area_chart_left_main">
					<div class="area_chart_left_l">
						<h3>PIE CHART</h3>
					</div>
					<div class="area_chart_left_r">
						<ul>
							<li >{{$items[0]->Item_Name}}(Red)</li>
							<li >{{$items[1]->Item_Name}}(Blue)</li>
							<li >{{$items[2]->Item_Name}}(Green)</li>
							<li >{{$items[3]->Item_Name}}(Yellow)</li>
							<li >{{$items[4]->Item_Name}}(Orange)</li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<canvas id="pie" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
				 <script>
					var pieData = [
							{
								value: {{$items[0]->SOLD}},
								color: "red"
							},
							{
								value : {{$items[1]->SOLD}},
								color : "blue"
							},
							{
								value : {{$items[2]->SOLD}},
								color : "green"
							},
							{
								value : {{$items[3]->SOLD}},
								color : "yellow"
							},
							{
								value : {{$items[4]->SOLD}},
								color : "orange"
							}
						/*	{
								value : {{$items[3]->SOLD}},
								color : green
							},
							{
								value : {{$items[4]->SOLD}},
								color : red
							}*/
						
						];
						new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
				</script>
			</div>

</center>
@endsection