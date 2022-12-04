@extends('layout.front_app')
@section('konten')
@foreach($jasa as $k => $v )
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="xzoom_container">
                    <img src="" alt="" class="xzoom" id="xzoom-default">
                    <div class="xzoom-thumbs">
                        @foreach($item as $k => $p )
                        <a href="{{asset('front/img/'.$p->title)}}">
                            <img src="{{asset('front/img/'.$p->title)}}" alt="" class="xzoom-gallery" width="80" xpreview="assets/images/cake-1.jpg">
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{ $v->name }}</h1>
                        <p class="h3 py-2">@currency($v->harga)</p>
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Kategori</h6>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="{{ url('kategori/'.$v->kategori->id) }}">{{$v->kategori->name}}</a>
                            </li>
                        </ul>
                        @foreach($user as $k => $p )
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Kategori</h6>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="{{ url('jasa/toko/'.$p->id) }}">{{$p->Toko->nama}}</a>
                            </li>
                        </u>
                        @endforeach
                        <h6>Description</h6>
                        <p>{{$v->deskripsi}}</p>

                        <form action="{{ url('jasa/pemesanan/'.$v->id.'/'.$v->user_id)}}">
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg">Buy</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
@push('script')
<script>
$(function(){

    $("#exzoom").exzoom({ 
      "navWidth": 60,
      "navHeight": 60,
      "navItemNum": 5,
      "navItemMargin": 7,
      "navBorder": 1,
      "autoPlay": true,
      "autoPlayTimeout": 2000
      
    });
  
  });
</script>    
@endpush