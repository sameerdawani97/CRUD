<h1>Update member record</h1>
<form action="{{ url('updateM') }}" method="POST">
	<!-- {{ csrf_field() }} -->
	@csrf<br><br>
	<input type="hidden" name="id" value="{{$data->id}}">
	<input type="text" name="Username" value="{{$data->name}}"><br>
	<span style = "color:red">@error('Username'){{$message}}@enderror</span><br><br>

	<input type="text" name="Email" value="{{$data->email}}"><br>
	<span style = "color:red">@error('Email'){{$message}}@enderror</span><br><br>


	<input type="text" name="Address" value="{{$data->address}}"><br>
	<span style = "color:red">@error('Address'){{$message}}@enderror</span><br><br>
	<button type="submit">Update</button>
	

</form>

