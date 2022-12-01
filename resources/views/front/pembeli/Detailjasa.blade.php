@extends('layout.front_app')
@section('konten')
@foreach($jasa as $k => $v )
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid"  alt="Card image cap" id="product-detail">
                </div>
                <div class="row">
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <!--End Controls-->
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/product_single_01.jpg" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/product_single_02.jpg" alt="Product Image 2">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/product_single_03.jpg" alt="Product Image 3">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
                        </div>
                        <!--End Slides-->
                    </div>
                    <!--End Carousel Wrapper-->
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-dark fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--End Controls-->
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
                                <a class="text-muted" href="{{ url('Jasa/vendor/'.$p->id) }}">{{$p->Toko->nama}}</a>
                            </li>
                        </u>
                        @endforeach
                        <h6>Description</h6>
                        <p>{{$v->deskripsi}}</p>

                        <form action="{{ url('jasa/pemesanan/'.$v->id) }}">
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