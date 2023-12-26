@include('externals.external')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">
<div id="app">

@include('pages.header.navbar')
    @include('pages.header.categorybar')

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active text-primary">Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">

                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('storage/images/'.$pd->image) }}" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>

                                <div class="col-12 col-md-7">

<div class="float-right">
    <form action="/startChat/{{ $pd->created_by }}" method="POST">
        @csrf
    <button class="btn btn-light  btn-cart">
        <i data-feather="message-square"></i>
        <span class="add-to-cart"></span>
    </button>
    </form>
    {{-- <a   href="javascript:void(0)" class="btn btn-warning  btn-cart">
        <i data-feather='plus-circle'></i>
        <span class="add-to-cart"></span>
    </a> --}}
</div>
                                    <h4 class="text-primary font-bold">{{ $pd->title }}</h4>
                                    <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">{{ $pd->brand }}</a></span>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price mr-1">${{ $pd->price }}</h4>
                                        <ul class="unstyled-list list-inline pl-1 border-left">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <p class="card-text">Available - <span class="text-success">In stock</span></p>
                                    <p class="card-text">
                                       {{ $pd->discription }}
                                    </p>
                                    <ul class="product-features list-unstyled">
                                        @if ($pd->dCharges===0)
                         <li><i data-feather="shopping-cart"></i> <span>Free Shipping</span></li>
                         @else
                         <li><i data-feather="shopping-cart"></i> <span>{{ $pd->dCharges }}</span></li>
                                        @endif

                                    </ul>
                                    <hr />
                                    <div class="product-color-options">
                                        <h6>Colors</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block selected">
                                                <div class="color-option b-primary">
                                                    <div class="filloption bg-primary"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-success">
                                                    <div class="filloption bg-success"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-danger">
                                                    <div class="filloption bg-danger"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-warning">
                                                    <div class="filloption bg-warning"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-info">
                                                    <div class="filloption bg-info"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr />

                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                      <div id="app" class="">




                                      <cart :is="activeComponent" :user='@json(Auth::user())' :product_id={{ $pd->id }} ></cart>






                                      </div>

                                        <wish :is="activeComponent" :user='@json(Auth::user())' :product_id={{ $pd->id }}></wish>

                                        <div class="btn-group dropdown-icon-wrapper btn-share">
                                            <button type="button" class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="share-2"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i data-feather="facebook"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i data-feather="twitter"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i data-feather="youtube"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i data-feather="instagram"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        {{-- <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="award"></i>
                                        <h4 class="mt-2 mb-1">This Product is listed by </h4>
                                        <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="clock"></i>
                                        <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                                        <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="shield"></i>
                                        <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                                        <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Item features ends -->

                        <!-- Related Products starts -->
                        <div class="card-body">
                            <div class="mt-4 mb-2 text-center">
                                <h4>Related Products</h4>
                                <p class="card-text">People also search for this items</p>
                            </div>
                            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                <div class="swiper-wrapper">

                                    @foreach ($recommendation as $pd )

                                    <div class="swiper-slide">
                                        <a href="javascript:void(0)">
                                            <div class="item-heading">
                                                <h5 class="text-truncate mb-0">{{ $pd->title }}</h5>
                                                <small class="text-body">by {{ $pd->brand }}</small>
                                            </div>
                                            <div class="img-container w-50 mx-auto py-75">
                                                <img src="{{ asset('storage/images/'.$pd->image) }}"  class="img-fluid" alt="image" />
                                            </div>
                                            <div class="item-meta">
                                                <ul class="unstyled-list list-inline mb-25">
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                </ul>
                                                <p class="card-text text-primary mb-0">${{ $pd->price }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach




                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <!-- Related Products ends -->



                    </div>
                </section>

                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->



    {{-- Comment Component --}}
<div id="app">
    <comment-component :is="activeComponent" :user='@json(Auth::user())' :product_id={{ $pd->id }}></comment-component>
</div>
</div>








</body>
</html>
@include('externals.extwenalJs')
<style>
    html{
        zoom: 80%;
    }


    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: 15%;
}

.btns {
  border: 2px solid gray;
  color: gray;
  background-color: white;

  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
