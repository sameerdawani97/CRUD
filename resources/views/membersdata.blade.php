<h1>Data for given members</h1>
<table border="1">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
	</tr>
	@foreach($datas as $data)
	<tr>
		<td>{{$data->name}}</td>
		<td>{{$data->email}}</td>
		<td>{{$data->address}}</td>
	</tr>
	@endforeach

</table>