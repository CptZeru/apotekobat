@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Obat</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Tanggal Produksi</th>
		<th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nama_obat']}}</td>
        <td>{{$post['harga']}}</td>
        <td>{{$post['stok']}}</td>
        <td>{{$post['expired_date']}}</td>
        <td>{{$post['production_date']}}</td>
		<td><a href="{{action('OBATcontroller@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection