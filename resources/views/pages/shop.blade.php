<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   @vite(['resources/js/app.js'])

</head>
@include('vendor.pagination.tailwind', ['elements' => $product,'paginator' => $product])
    <!-- BEGIN: Content-->
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
                                    <div class="search-results">{{ $count }} results found</div>
                                </div>
                                <div class="view-options d-flex">

@auth
@if(Auth::user()->is_seller==1)

                                    <div class="custom-control custom-switch custom-switch-primary">

                                        <input type="checkbox" class="custom-control-input" id="customSwitch10"  />
                                        <label class="custom-control-label" for="customSwitch10">

                                           <form action="/sellerActive" method="POST">
                                            @csrf
                                            <button> <span class="switch-icon-left mt-0.5 pt-0.5"><i data-feather="check"></i></span></button>
                                            {{-- <span class="switch-icon-right mt-0.5 pt-0.5"><i data-feather="x"></i></span> --}}

                                        </form>

                                        </label>
                                    </div>
@endif
@endauth


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










{{--  --}}


<div class="relative flex justify-center items-center md:justify-start mt-2 ">
    <img class="lg:block  w-full" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/banner_11_desktop.png" alt="randeer">
    <img class="md:block lg:hidden hidden  w-full " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/banner_11_ipad.png" alt="randeer">
    <img class="md:hidden w-full " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/banner_11_mobile.png" alt="randeer">
<div class="flex absolute justify-start flex-col md:flex-row items-center md:space-y-12 md:space-y-0">
    <div class=" py-32 sm:py-20  md:hidden"></div>
    <div class="mt-10  lg:w-auto custom sm:mt-96 md:mt-0 h-full flex px-4 md:px-0  z-10 justify-center items-center md:items-start flex-col md:pl-20 lg:px-20 2xl:px-44">
        <p class="text-xl sm:text-2xl xl:text-4xl text-center md:text-left font-semibold leading-6 xl:leading-10 text-gray-100 md:w-96 2xl:w-2/3" >Your message from Santa is waiting!</p>
        <p class="mt-4 md:w-80 lg:w-2/3 xl:w-3/4 text-center md:text-left  text-base leading-normal text-gray-200" >Looking to create a greater impact with your commercial Christmas display? Take a look at the services we have on offer...</p>
        {{-- <button class="mt-6 shrink-0 w-full md:w-auto  lg:mt-8 py-2 md:py-3 px-10 flex justify-center duration-700  items-center text-base border-2 border-white transition hover:-translate-y-1 hover:bg-gray-100 hover:text-gray-800 font-medium text-white">
            Explore Now
        </button> --}}
    </div>
</div>
</div>




{{--  --}}


@auth
@if ($recommend!=null)

<div class="pb-16">
    <div class="bg-gray-100 dark:bg-gray-800 flex flex-col justify-center items-center pt-9 sm:pt-12 lg:pt-16 pb-24 sm:pb-52">
        <div class="2xl:container 2xl:mx-auto flex flex-col justify-center items-center sm:pb-12 lg:pb-0 space-y-4 px-4 md:px-6 2xl:px-0">
            <div>
                <p class="text-3xl lg:text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Recommended Products</p>
            </div>
            <div>
                <p class="text-base leading-normal sm:leading-none text-center text-gray-600 dark:text-white dark:text-white">Explore products that best match your intrest</p>
            </div>
        </div>
    </div>
    <div class="-mt-16 sm:-mt-48 lg:-mt-32 xl:-mt-40 2xl:container 2xl:mx-auto flex justify-center items-center space-y-4 px-4 md:px-6 2xl:px-0 mb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-items-between gap-x-6 gap-y-5">






@foreach ($recommend  as $rc )


         <a href="/productdetail/{{ $rc->id }}"> <div class="flex flex-col justify-center items-start p-2 bg-white dark:bg-gray-900">
                <div class="relative">
                    <img class="lg:block hidden" src="{{ asset('storage/images/'. $rc->image ) }}" alt="headphones" />
                    <img class="lg:hidden" src="{{ asset('storage/images/'. $rc->image ) }}" alt="headphones" />

                    {{-- <button class="top-4 right-4 absolute p-3.5 text-gray-600 dark:text-white hover:text-gray-500 flex justify-center items-center bg-white dark:bg-gray-900 rounded-full">
                        <svg class="fill-stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.25 6.875V5.625C6.25 4.63044 6.64509 3.67661 7.34835 2.97335C8.05161 2.27009 9.00544 1.875 10 1.875V1.875C10.9946 1.875 11.9484 2.27009 12.6517 2.97335C13.3549 3.67661 13.75 4.63044 13.75 5.625V6.875M3.125 6.875C2.95924 6.875 2.80027 6.94085 2.68306 7.05806C2.56585 7.17527 2.5 7.33424 2.5 7.5V15.9375C2.5 17.1187 3.50625 18.125 4.6875 18.125H15.3125C16.4937 18.125 17.5 17.1676 17.5 15.9863V7.5C17.5 7.33424 17.4342 7.17527 17.3169 7.05806C17.1997 6.94085 17.0408 6.875 16.875 6.875H3.125Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path d="M6.25 8.75V9.375C6.25 10.3696 6.64509 11.3234 7.34835 12.0267C8.05161 12.7299 9.00544 13.125 10 13.125C10.9946 13.125 11.9484 12.7299 12.6517 12.0267C13.3549 11.3234 13.75 10.3696 13.75 9.375V8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button> --}}
                    <div class="flex justify-between mt-4">
                        <div>
                            <p class="text-lg font-medium leading-none text-gray-800 dark:text-white ">{{ $rc->title }}</p>
                        </div>
                        <div>
                            <p class="text-lg leading-none text-right text-primary font-bold dark:text-white">${{ $rc->price }}</p>
                        </div>
                    </div>
                </div>
            </div></a>

@endforeach



        </div>
    </div>
</div>
@endif

@endauth







{{--  --}}
<div class="bg-gray-100 dark:bg-gray-800 flex flex-col justify-center items-center pt-6 shadow-lg mb-2    ">
    <div class="2xl:container 2xl:mx-auto flex flex-col justify-center items-center sm:pb-12 lg:pb-0 space-y-4 px-4 md:px-6 2xl:px-0">
        <div>
            <p class="text-3xl lg:text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">FEATURED PRODUCTS</p>
        </div>

    </div>
</div>



                <div class=" items-center justify-center w-full h-auto mt-6  px-1">
                    <div class="w-full relative flex items-center justify-center">
                        <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">


                                @foreach ($featured as $ft )

                              <a class="flex flex-shrink-0 relative w-full sm:w-auto" href="/productdetail/{{ $ft->product_id }}">

                                    <img src="{{ asset('storage/images/'. $ft->image ) }}" alt="black chair and white table" class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">${{ $ft->price }}</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">{{ $ft->title }}</h3>

                                    </div>
                                </div>
                            </a>
                                @endforeach




                            </div>
                        </div>
                        <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>

                <hr class="py-5">








                <hr class="py-5">








<div id="app">

    <div class="bg-gray-100 flex dark:bg-gray-800 flex flex-col justify-center items-center pt-6 shadow-lg mb-1   ">
        <div class="2xl:container 2xl:mx-auto flex flex-col justify-center items-center sm:pb-12 lg:pb-0 space-y-4 px-4 md:px-6 2xl:px-0">
            <div>
                <p class="text-3xl lg:text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">All PRODUCTS</p>

            </div>

        </div>

    </div>



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
                <a href="/shwawl" class="cursor-pointer">
                    <button class="bg-info hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mx-auto w-full border border-gray-400 rounded shadow">
                        Show all
                      </button>
                    </a>

            </div>
            </div>
        </div>






        </div>
    </div>
  </div>




<script>

let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
<style>
    html{
        zoom: 70%;
    }
</style>
