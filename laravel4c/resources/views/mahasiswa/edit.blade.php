@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background : #F08080 ">Edit Data</div>

                <div class="card-body">
                  <form action="{{ route ('update.data' , $mahasiswa->id) }}" method ="post" class="form-item" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                  <div class="col">
                  <label for="user_id">User ID</label>
                  <input type="text" name="user_id" class="form-control" placeholder="Tambahkan  User ID" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa -> user_id }}">
                </div>
                <div class="col">
                  <label for="name">Nama Mahasiswa</label>
                  <input type="text"   name="name" class="form-control" placeholder="Nama Mahasiswa"  value="{{ is_null ($mahasiswa) ? '' : $mahasiswa -> name }} "> 
                <div class="col">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa ->tempat_lahir }}">
                </div>
                <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value =" {{ is_null ($mahasiswa) ? '' : $mahasiswa ->tgl_lahir }}"> 
                </div>
                <div class="col">
                  <label for="telepon">Telepon</label>
                  <input type="number" name="telepon" class="form-control" placeholder="Telepon" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa -> telepon}}" >
                </div>
                <div class="col">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa -> alamat }}">
                </div>
                <div class="col">
                <label for="gender">Gender</label>
                <h8>Gender (L/P)</h8>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="L">
                        <label class="form-check-label" for="jenis">Laki - laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="P">
                        <label class="form-check-label" for="jenis">Perempuan</label>
                  </div> 
                </div>
                <div class="col">
                  <label for ="foto"> Foto </label>
                  <input type="file" name="foto">
                  </div>


        </div>
        <div class="form-group">
        <div class="form-row float-right">
            <div class="col">
            <button type="submit" class =" btn btn-md btn-primary" name="simpan" >SIMPAN</a>
            <a href="{{ route ('indexmahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
        </div>
        </div>
    </div>
</div>
@endsection