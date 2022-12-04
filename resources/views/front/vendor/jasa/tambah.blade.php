@extends('layout.vendor')
@section('konten')
<div class="container">
    <section class="bg-light">
        <div class="container">
    <form action="{{ route('jasa.store')}}" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label mt-3">input nama jasa</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="nama jasa ....">
            <label for="kategori" class="form-label mt-3">pilih kategori</label>
            <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                <option value="">-pilih kategori-</option>
                @foreach ($kategori_jasas as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <label for="img" class="form-label mt-3">input gambar jasa</label>
            <span id="" class="form-text">
                (dapat melakukan input lebih dari 1 gambar)
            </span>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img[]" multiple>
            <label for="lokasi" class="form-label mt-3">input Lokasi jasa</label>
            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" placeholder="input lokasi ....">
            <label for="harga" class="form-label mt-3">input harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="harga ....">
            <label for="deskripsi" class="form-label mt-3">input deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="10"
                placeholder="input deskripsi ..."></textarea>
            <label for="diskon" class="form-label mt-3">diskon</label>
            <span id="" class="form-text">
                (input 0 jika tidak ada diskon)
            </span>
            <input type="number" class="form-control @error('diskon') is-invalid @enderror" max="100" min="0" name="diskon" id="diskon" placeholder="harga .....">
            @csrf
            @method('POST')
            <input type="submit" class="btn btn-primary mt-3 mb-3" value="Simpan">
        </div>
    </form>
    </div>
    </section>
</div>
@endsection('konten')