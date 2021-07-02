<h1>Member list</h1>

<a href="{{url('addmember')}}"><b>ADD MEMBER</b></a><br><br>
<table border="1" cellpadding="6">
<tr>
	<td>ID</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>Delete here</td>
	<td>Edit here</td>

</tr>
@foreach($users as $user)
<tr>
	<td>{{$user->id}}</td>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td>{{$user->address}}</td>
	<td><a href= {{"delete/".$user->id}} style = "color:red">delete</a></td>
	<td><a href = {{"update/".$user->id}} style = "color:blue">Edit</a></td>
</tr>
@endforeach
</table>
<br><br>

<h2>Search records by name</h2>
<form action="fetch" method = "post">
@csrf
<input type="text" name="Username" placeholder="Enter name to find record"><br>
<spam style = 'color:red'>@error('name'){{$message}}@enderror</spam>
<br>
<button type = "submit">Fetch</button>
</form>






