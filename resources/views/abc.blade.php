
@foreach(Cart::content() as $row)
{{$row->name}}
{{$row->price}}
{{$row->qty}}
<br/>
@endforeach