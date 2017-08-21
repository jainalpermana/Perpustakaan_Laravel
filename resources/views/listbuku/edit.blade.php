<form action="/listbuku/{{$listbuku->id}}" method="post">

	<input type="hidden" name="id" placeholder="id" value="{{$listbuku->id}}"><br>
	nama   : 
	<input type="text" name="nama" placeholder="nama" value="{{$listbuku->nama}}"><br>
	harga_jual  : 
	<input type="text" name="harga_jual" placeholder="harga_jual" value="{{$listbuku->harga_jual}}"><br>
	harga_dasar  : 
	<input type="text" name="harga_dasar" placeholder="harga_dasar" value="{{$listbuku->harga_dasar}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="_method" value="put">
	
	<input type="submit" value="ok">
</form>