@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('crud')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="obat" class="col-sm-2 col-form-label col-form-label-lg">Nama Obat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="obat" placeholder="Nama Obat" name="obat">
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <label for="harga" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="harga" placeholder="Harga Obat" name="harga">
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <label for="stok" class="col-sm-2 col-form-label col-form-label-lg">Stok</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="stok" placeholder="Stok Obat" name="stok">
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <label for="expdate" class="col-sm-2 col-form-label col-form-label-lg">Tanggal Kadaluarsa</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="expdate" name="expdate">
      </div>
    </div>
	<div class="form-group row">
      {{csrf_field()}}
      <label for="proddate" class="col-sm-2 col-form-label col-form-label-lg">Tanggal Produksi</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="proddate" name="proddate">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection