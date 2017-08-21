<h2>List Buku</h2>
  <a href="/listbuku/create">Input Buku</a>
  <hr>
  <form action="{{ url('query')}}" method="GET">
  cari <br>
  <input type="text" class="validate" name="q"><br>
  <button type="submit"> cari </button>

  @foreach($listbukus as $listbuku)
      <p>{{ $listbuku-> nama}}</p>
      <p>{{ $listbuku-> harga_jual}}</p>
      <p>{{ $listbuku-> harga_dasar}}</p>
      <a href="/listbuku/{{$listbuku->id}}/edit">edit</a>
       <td><form action="/listbuku/{{$listbuku->id}}" method="post">      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <input type="hidden" name="_method" value="delete">

      <input type="submit" name="" value="Delete">
      <hr>

      </form>
      </td>
      
  @endforeach
    {!!$listbukus->links()!!}