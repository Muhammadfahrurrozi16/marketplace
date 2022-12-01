@extends('layout.back_app')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="/admin/dashboard" >Home/</a><a href="/admin/dashboard/kategori">kelola kategori</a></h4>
<form action="/admin/dashboard/kategori" method="POST" enctype="multipart/form-data">
@csrf    
<div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">kategori</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label">Nama kategori</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}" name="name" placeholder="" autofocus required/>  
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div> 
        <div>
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control @error('deskripsi') is-invalid @enderror" required value="{{ old('deskripsi') }}" name="deskripsi" rows="3"autofocus required></textarea>
          @error('deskripsi')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Uploud Gambar</label>
            <input class="form-control @error('icon') is-invalid @enderror" required value="{{ old('icon') }}" type="file" name="icon" autofocus required/>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="card-footer"> 
            <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
        </div> 
      </div>
    </div>
</form>
</div>
@endsection
 