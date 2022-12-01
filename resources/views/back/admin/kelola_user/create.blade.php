@extends('layout.back_app')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="/admin/dashboard" >Home/</a><a href="/admin/dashboard/kategori">kelola kategori</a></h4>
<form action="/admin/dashboard/user" method="POST" enctype="multipart/form-data">
@csrf    
<div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">User</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label">Nama </label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}" name="name" placeholder="" autofocus required/>  
          <span class="fas fa-envelope"></span> 
        </div> 
        <div>
          <label for="deskripsi" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}" name="email" rows="3"autofocus required/>
        </div>
        <div class="mb-3">
            <div class="form-group">
            <label for="role" class="form-label">Toko</label>
            <select class="form-select" name="role_id" aria-label="Default select example">
            <option selected value="-">Open this select menu</option>
            @foreach ($toko as $k => $p)
              <option value="{{ $p->id }}">{{ $p->nama}}</option>
            @endforeach
            </select>
            </div>
          </div>
        <div class="mb-3">
            <div class="form-group">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role_id" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($Role as $k => $v)
              <option value="{{ $v->id }}">{{ $v->role }}</option>
            @endforeach
            </select>
            </div>
          </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Uploud Gambar</label>
            <input class="form-control @error('image') is-invalid @enderror" required value="{{ old('image') }}" type="file" name="image" autofocus required/>
        </div>
        <div class="mb-3">
            <div class="form-group">
            <label for="role" class="form-label">status</label>
            <select class="form-select" name="aktif" aria-label="Default select example">
            <option selected>Open this select menu</option>
              <option value="{{ 'y' }}">aktif</option>
              <option value="{{ 'n' }}">nonaktif</option>
            </select>
            </div>
          </div>
        <div class="card-footer"> 
            <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
        </div> 
      </div>
    </div>
</form>
</div>
@endsection
 