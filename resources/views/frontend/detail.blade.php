@extends('frontend.template')
@section('content')
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @php
                            $i = 0;
                            @endphp
                            @foreach (json_decode($hp->gambar) as $item => $value)
                        </li>
                        <li data-target="#product_details_slider" data-slide-to="{{ $i++ }}" style="background-image: url({{asset('/files/'.$value)}});">
                        </li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach (json_decode($hp->gambar) as $key => $value)
                        <div class="carousel-item @if($key == 0) {{ 'active' }} @endif">
                            <a class="gallery_img" href="img/product-img/pro-big-1.jpg">
                                <img class="d-block w-100" src="{{asset('/files/'.$value)}}" alt="{{ $i++ }}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5">
            <div class="single_product_desc">
                <!-- Product Meta Data -->
                <div class="product-meta-data">
                    <div class="line"></div>
                    <p class="product-price">Rp {{ $hp->harga }}</p>
                    <a href="product-details.html">
                        <h6>{{ $hp->name }}</h6>
                    </a>
                    <!-- Ratings & Review -->
                    <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="review">
                            <a href="#">Write A Review</a>
                        </div>
                    </div>
                    <!-- Avaiable -->
                    <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                </div>

                <div class="short_overview my-5">
                    <b>RAM :</b> {{ $hp->ram->size }} GB <br>
                    <b>Storage :</b> {{ $hp->storage->size }} GB <br>
                    <b>Camera :</b> {{ $hp->camera->size }} MP <br>
                    <b>Battery :</b> {{ $hp->battery->size }} mAh <br>
                    <b>Color : </b> {{ $hp->color->name }}

                </div>
                <!-- Add to Cart Form -->


            </div>
        </div>
    </div>
</div>
</div>

@endsection
