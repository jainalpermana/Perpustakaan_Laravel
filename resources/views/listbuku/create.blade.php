<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create List buku</title>

<body>
	
<form action="/listbuku" method="post">
	nama   : 
	<input type="text" name="nama" placeholder="nama"><br>
	harga jual  : 
	<input type="text" name="harga_jual" placeholder="harga_jual"><br>
	harga dasar  : 
	<input type="text" name="harga_dasar" placeholder="harga_dasar"><br>
	

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="submit" value="ok">
</form>

</body>
</html>