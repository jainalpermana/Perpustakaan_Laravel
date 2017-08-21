<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Penerbit</title>

<body>
	
<form action="/listpenerbit" method="post">
	nama   : 
	<input type="text" name="nama" placeholder="nama"><br>
	alamat  : 
	<input type="text" name="alamat" placeholder="alamat"><br>
	kontak  : 
	<input type="text" name="kontak" placeholder="kontak"><br>
	

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="submit" value="ok">
</form>

</body>
</html>