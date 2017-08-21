<h2>List Buku</h2>
  <a href="/listbuku/create">Input Buku</a>
  <hr>
  @foreach($hasil as $listbuku)
      <p>{{ $listbuku-> nama}}</p>
      <p>{{ $listbuku-> harga_jual}}</p>
      <p>{{ $listbuku-> harga_dasar}}</p>
      <a href="/listbuku/{{$listbuku->id}}/edit">edit</a>
       <td><form action="/listbuku/{{$listbuku->id}}" method="post">      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <input type="hidden" name="_method" value="delete">

      <input type="submit" name="" value="Delete">

      </form>
      </td>
      
  @endforeach