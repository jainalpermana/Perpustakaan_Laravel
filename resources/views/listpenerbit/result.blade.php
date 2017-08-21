<h2>List Penerbit</h2>
  <a href="/listpenerbit/create">Input Penerbit</a>
  <hr>
  @foreach($hasil as $listpenerbit)
      <p>{{ $listpenerbit -> nama}}</p>
      <p>{{ $listpenerbit -> alamat}}</p>
       <p>{{ $listpenerbit -> kontak}}</p>
       <a href="/listpenerbit/{{$listpenerbit->id}}/edit">edit</a>
       <td><form action="/listpenerbit/{{$listpenerbit->id}}" method="post">      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <input type="hidden" name="_method" value="delete">

      <input type="submit" name="" value="Delete">

      </form>
      </td>
      
      <hr>
  @endforeach
    {!!$hasil->links()!!}