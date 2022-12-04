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
                  <a class="nav-link active"href="{{ url('jasa/toko/list/'.$v->id) }}">Jasa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="{{ url('jasa/toko/FAQ/'.$v->id) }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ url('jasa/toko/review/'.$v->id) }}">Reviews</a>
                  </li>
              </ul>
            </div>
    <div class="container py-3">
            <div class="row">
                @foreach($jasa as $k => $p )
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="">
                            </div>
                            <div class="card-body">
                            <a href="{{ url('jasa/detail/'.$p->id.'/'.$p->user_id) }}">
                                <p href="shop-single.html"class="text-left mb-0">{{ $p->name }}</p>
                                <ul>
                                </ul>
                                <p class="text-center mb-0">@currency($p->harga)</p>
                            </a>
                            </div>
                        </div>
                    </div>
             @endforeach
    </div>
    </div>
</section>
@endforeach
@endsection