@extends('template.default')

@php
  $title = 'Data Sekolah';
  $preTitle = 'Edit Data Siswa';
  @endphp

@section('body')
<h1>EDIT DATA</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolah.update', $sekolah->id) }}" class=""method="post">
            @csrf
            @method('PUT')
<div class="mb-3">
             <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolah"value="{{ $sekolah->nama_sekolah}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Alamat Sekolah</label>
            <input type="text" name="alamat_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolah"value="{{ $sekolah->alamat_sekolah}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Tulis Nama Jurusan"value="{{ $sekolah->jurusan}}">
    </div>

    <div class="mb-3">
             <label class="form-label">Jumlah Guru</label>
            <input type="text" name="jumlah_guru" class="form-control" name="example-text-input" placeholder="Tulis Jumlah Guru"value="{{ $sekolah->jumlah_guru}}">
    </div>

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>

@endsection