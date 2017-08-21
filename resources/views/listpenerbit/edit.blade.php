<form action="/listpenerbit/{{$listpenerbit->id}}" method="post">

	<input type="hidden" name="id" placeholder="id" value="{{$listpenerbit->id}}"><br>
	nama   : 
	<input type="text" name="nama" placeholder="nama" value="{{$listpenerbit->nama}}"><br>
	alamat  : 
	<input type="text" name="alamat" placeholder="alamat" value="{{$listpenerbit->alamat}}"><br>
	kontak  : 
	<input type="text" name="kontak" placeholder="kontak" value="{{$listpenerbit->kontak}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="_method" value="put">
	
	<input type="submit" value="ok">
</form>