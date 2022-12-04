@extends('layout.front_app')
@section('konten')
@foreach($user as $k => $v )
<section class="bg-light">
        <div class="container py-5">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$v->Toko->nama}}</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div> 
        <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('jasa/toko/'.$v->id) }}">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link "href="{{ url('jasa/toko/list/'.$v->id) }}">Jasa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{ url('jasa/toko/FAQ/'.$v->id) }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ url('jasa/toko/review/'.$v->id) }}">Reviews</a>
                  </li>
              </ul>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
    </div>
</section>
@endforeach
@endsection