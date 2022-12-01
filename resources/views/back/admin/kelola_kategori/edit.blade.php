@extends('layout.back_app')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="/admin/dashboard" >Home/</a><a href="/admin/dashboard/kategori">kelola kategori</a></h4>
@foreach ($Kategori as $k => $v) 
<form action="{{ route('kategori.update',$v->id) }}" method="POST" enctype="multipart/form-data">
@method('put')
@csrf  
<div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">kategori</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label">Nama kategori</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" placeholder="" value="{{ $v->name }}" autofocus required/>  
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        <div>
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="" value="{{ $v->deskripsi }}"   rows="3"autofocus required >{{ $v->deskripsi }}</textarea>
          <span class="fas fa-envelope"></span>
          @error('deskripsi')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Uploud Gambar</label>
            <input class="form-control @error('icon') is-invalid @enderror" type="file" name="icon" value="{{$v->icon}}"/>
            @error('deskripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
          <div class="card-footer"> 
            <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
        </div> 
      </div>
    </div>
</form>
@endforeach
</div>
@endsection
 