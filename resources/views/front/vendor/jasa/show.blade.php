@extends('layout.vendor')
@section('konten')
<div class="container mt-3">
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('storage/' . $imgs[0]->path) }}"
                            alt="Card image cap" id="product-detail">
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
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                            data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($imgs as $img => $v)
                                        @if ($img++ < 3)
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('storage/' . $v->path ) }}" alt="Product Image {{ $img++ }}">
                                            </a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!--/.First slide-->

                                @if (count($imgs) > 3)
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        @foreach ($imgs as $img => $v)
                                        @if ($img++ >= 3 and $img++ < 7)
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('storage/' . $v->path ) }}" alt="Product Image {{ $img++ }}">
                                            </a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                @if (count($imgs) > 6)

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        @foreach ($imgs as $img => $v)
                                        @if ($img++ >= 6 and $img++ < 9)
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('storage/' . $v->path ) }}" alt="Product Image {{ $img++ }}">
                                            </a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!--/.Third slide-->
                                @endif

                                @endif

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
                            <h1 class="h2">{{ $jasa->name }}</h1>
                            <p class="h3 py-2">Rp. {{$jasa->harga}},00</p>
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
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Easy Wear</strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>
                                {{ $jasa->deskripsi }}
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span>
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span>
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span>
                                            </li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

</div>
@endsection('konten')
@section('script')
<!-- Start Script -->
<script src="{{asset('front/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/js/templatemo.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>
<!-- End Script -->


<!-- Start Slider Script -->
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script>
    $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
</script>
<!-- End Slider Script -->

@endsection('scripts')