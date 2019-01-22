@extends('frontend.template')

@section('content')
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="product-sorting d-flex">
        <div class="view-product">
            <p>Merk</p>
            <form action="#" method="get">
                <select class="" name="select" id="viewProduct">
                    <option value="value">samsung</option>
                    <option value="value">F1+</option>
                    <option value="value">Oppo</option>
                    <option value="value">Xiaomi</option>
                </select>
            </form>
        </div>
    </div>
    <br>
    <form action="{{ route('post.spec', ['search' => 'all']) }}" method="POST">
        @csrf
        <div id="dynamic">
            <div class="row">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02" name="spec[]">
                        <option selected>Choose...</option>
                        <option value="ram">Ram</option>
                        <option value="storage">Storage</option>
                        <option value="camera">Camera</option>
                        <option value="battery">Battery</option>
                        <option value="color">Color</option>
                        <option value="sound">Sound</option>
                        <option value="dualcam">Dual Camera</option>
                        <option value="display">Layar</option>
                    </select>
                    <div class="input-group-append" style="padding: 8px;">
                        <a style="" href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square-o" style="font-size: 25px"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn amado-btn mb-10" style="marigtop:50%">Search</button>
    </form>
</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <p>Showing 1-8 0f 25</p>
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                            <p>Sort by</p>
                            <form action="#" method="get">
                                <select name="select" id="sortBydate">
                                    <option value="value">Date</option>
                                    <option value="value">Newest</option>
                                    <option value="value">Popular</option>
                                </select>
                            </form>
                        </div>
                        <div class="view-product d-flex align-items-center">
                            <p>View</p>
                            <form action="#" method="get">
                                <select name="select" id="viewProduct">
                                    <option value="value">12</option>
                                    <option value="value">24</option>
                                    <option value="value">48</option>
                                    <option value="value">96</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Product Area -->
            @foreach ($data as $item)
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        @php
                        $i=0;
                        @endphp
                        @foreach (json_decode($item->gambar) as $gg => $value)
                       <a href="{{ route('detail.hp', ['id' => $item->id]) }}"> <img src="{{ asset('/files/'.$value)}}" height="30%" width="30%"></a>
                        @php
                        break;
                        @endphp
                        @endforeach
                        <!-- Hover Thumb -->
                        {{-- <img class="hover-img" src="img/product-img/product2.jpg" alt=""> --}}
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">Rp {{ $item->harga }}</p>
                            <a href="{{ route('detail.hp', ['id' => $item->id]) }}">
                                <h6>{{ $item->name }}</h6>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="cart">
                                <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Product Area -->
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <ul class="pagination justify-content-end mt-50">
                        <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                        <li class="page-item"><a class="page-link" href="#">02.</a></li>
                        <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        <li class="page-item"><a class="page-link" href="#">04.</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('#dynamic'); //Input field wrapper
        var fieldHTML = ' <div class="row"> <div class="input-group mb-3"> <select class="custom-select" id="inputGroupSelect02" name="spec[]"> <option selected>Choose...</option> <option value="ram">Ram</option> <option value="storage">Storage</option> <option value="camera">Camera</option> <option value="battery">Battery</option> <option value="color">Color</option> <option value="sound">Sound</option> <option value="dualcam">Dual Camera</option> <option value="display">Layar</option> </select> <div class="input-group-append" style="padding: 8px;"> <a style="" href="javascript:void(0);" class="remove_button" title="remove field"><i class="fa fa-minus-square-o" style="font-size: 25px"></i></a> </div></div></div>';
        var x = 1; //Initial field counter is 1
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent().parent().remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
@endpush
@push('css')
@endpush
