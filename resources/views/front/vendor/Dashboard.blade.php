@extends('layout.vendor')
@section('konten')
<div class="container mt-3">
    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            @if ($items)
            <div class="row">
                @foreach ($items as $k)

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('jasa.show', $k->jasa_id) }}">
                            <img src="{{ asset('storage/' . $k->path )  }}" class="card-img-top" alt="{{ $k->name }}">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">Rp. {{ $k->jasa->harga }},00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">{{$k->jasa->name}}</a>
                            <p class="card-text">
                                {{Str::limit(strip_tags($k->jasa->deskripsi), 70)}}
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

            @else
            <div class="row text-center py-3">
                <h2>
                    Tidak ada jasa tersedia
                </h2>
            </div>
            @endif
        </div>
    </section>
    <!-- End Featured Product -->

</div>
@endsection('konten')