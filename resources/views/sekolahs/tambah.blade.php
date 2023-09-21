@extends('template.default')

@php
  $title = 'Data Sekolah';
  $preTitle = 'Tambah Data Siswa';
  @endphp

@section('body')
<h1>Tambah Data</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolah.simpan') }}" class=""method="post">
            @csrf
<div class="mb-3">
             <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolah">
    </div>

    <div class="mb-3">
             <label class="form-label">Alamat Sekolah</label>
            <input type="text" name="alamat_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolah">
    </div>

    <div class="mb-3">
             <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Tulis Nama Jurusan">
    </div>

    <div class="mb-3">
             <label class="form-label">Jumlah Guru</label>
            <input type="text" name="jumlah_guru" class="form-control" name="example-text-input" placeholder="Tulis Jumlah Guru">
    </div>

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>

@endsection