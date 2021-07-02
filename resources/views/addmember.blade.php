<h2>Add Member</h2>
<br>
<form action="add" method="post">
@csrf

<input type="text" name="Username" placeholder="Enter your name">
<br>
<span style = "color:red">@error('Username'){{$message}}@enderror</span>
<br><br>
<input type="email" name="Email" placeholder="sameer@gmail.com"><br>
<span style = "color:red">@error('Email'){{$message}}@enderror</span>
<br><br>
<input type="text" name="Address" placeholder="Enter your address"><br>
<span style = "color:red">@error('Address'){{$message}}@enderror</span>
<br><br>
<button type="submit">Add member</button>

<br><br><br>




