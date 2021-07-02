<h1>Search</h1>
<form action="fetch" method = "post">
@csrf
<input type="text" name="Username" placeholder="Enter name to find record"><br>
<spam style = 'color:red'>@error('name'){{$message}}@enderror</spam>
<br>
<button type = "submit">Fetch</button>
</form>
