@php

use App\Models\items;
$itm=items::get();
$itmc=$itm->count();
@endphp


@include('externals.external')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoreWithMore</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">
<div id="app">

    @include('pages.header.navbar')

    <div class="app-content content ecommerce-application mb-3">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title text-pinkish float-left mb-0">Shop</h2>

                        </div>
                    </div>
                </div>

            </div>
            <div class="content-detached ">
                <div class="content-body">
                    <!-- E-commerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>

                                        </button>
                                        <div class="search-results">{{ $itmc }} results found</div>
                                    </div>
                                    <div class="view-options d-flex">
                                     {{-- <div class="btn-group dropdown-sort">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="active-sorting">Featured</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Featured</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Lowest</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Highest</a>
                                            </div>
                                        </div> --}}



                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>





                    <!-- E-commerce Content Section Starts -->

                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="body-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- E-commerce Search Bar Starts -->
                   <search></search>
                    <!-- E-commerce Search Bar Ends -->















    <div id="app">





    {{-- <allproducts></allproducts> --}}





                    <!-- E-commerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">


    @foreach ( $product as $pd )

                        <div class="card ecommerce-card">
    @if ($pd->status==1)

                            <span class="badge badge-pill badge-light-warning ">Out Of Stock</span>

                            @endif

                            <div class="item-img text-center">

                                <a href="{{ route('productdetail',[$pd->id]) }}">
                                    <img class="img-fluid card-img-top" src="{{ asset('storage/images/'. $pd->image ) }}" alt="img-placeholder" />
                                </a>

                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="item-price">${{ $pd->price }}</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="app-ecommerce-details.html">{{ $pd->title }}</a>

                                    <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">{{ $pd->brand }}</a></span>
                                </h6>
                                <p class="card-text item-description">
                                    {{ $pd->discription }}
                                </p>
                            </div>


                                <cart :is="activeComponent" :user='@json(Auth::user())'  :product_id={{ $pd->id }} ></cart>

                                <wish :is="activeComponent" :user='@json(Auth::user())'  :product_id={{ $pd->id }} ></wish>


                        </div>
                        @endforeach



                    </section>
                    <!-- E-commerce Products Ends -->

                    {{ $product->links() }}
                </div>
                </div>
            </div>

            </div>
        </div>
      </div>


    </div>

</body>
</html>
@include('externals.extwenalJs')

<style>
    html{
        zoom: 80%;
    }
</style>
