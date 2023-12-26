<template>
 <!-- BEGIN: Content-->

 <div class="app-content content ecommerce-application">

<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Shop</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">eCommerce</a>
                            </li>
                            <li class="breadcrumb-item active">Shop
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-detached content-right">
        <div class="content-body">
            <!-- E-commerce Content Section Starts -->

            <!-- E-commerce Content Section Starts -->

            <!-- background Overlay when sidebar is shown  starts-->
            <div class="body-content-overlay"></div>
            <!-- background Overlay when sidebar is shown  ends-->

            <!-- E-commerce Search Bar Starts -->
            <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- E-commerce Search Bar Ends -->

            <!-- E-commerce Products Starts -->

            <section id="ecommerce-products" class="grid-view">
        <div   v-for="items in products" v-show="items.price > filterPrice[0] && items.price < filterPrice[1]"  class="card ecommerce-card">
                    <div class="item-img text-center">
                        <a :href="'/productdetail/'+items.id">
                            <img class="img-fluid card-img-top" :src="'../../../../storage/images/'+items.image" alt="img-placeholder" />
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
                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h6 class="item-price">${{ items.price }}</h6>
                            </div>
                        </div>
                        <h6 class="item-name">
                            <a class="text-body" href="app-ecommerce-details.html"> {{ items.title }} </a>
                            <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Philips</a></span>
                        </h6>
                        <p class="card-text item-description">
                            {{ items.discription }}
                        </p>
                    </div>
                    <div class="item-options text-center">
                        <div class="item-wrapper">
                            <div class="item-cost">
                                <h4 class="item-price">${{ items.price }}</h4>
                            </div>
                        </div>
                       <wish :user="this.loggedIn" :product_id="items.id"></wish>

                        <cart :user="this.loggedIn" :product_id="items.id"></cart>

                    </div>
                </div>
            </section>

            <!-- E-commerce Products Ends -->

            <!-- E-commerce Pagination Starts -->


            <!-- E-commerce Pagination Ends -->

        </div>
    </div>
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <!-- Ecommerce Sidebar Starts -->
            <div class="sidebar-shop">
                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Price Filter starts -->

                        <div class="multi-range-price">
                            <h6 class="filter-title mt-0">Multi Range</h6>
                            <ul class="list-unstyled price-range" id="price-range">
                                <li>

                                    <div  class="custom-control custom-radio">

                                        <input v-model="filterPrice" v-bind:value="[0,100000]"  type="radio" id="priceAll" name="price-range"  class="custom-control-input" checked />

                                        <label class="custom-control-label" for="priceAll">All</label>
                                    </div>


                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input v-model="filterPrice" v-bind:value="[50,200]"  type="radio" id="priceRange1" ref="pf2" name="price-range" class="custom-control-input" />
                                        <label class="custom-control-label" for="priceRange1">$50-$200</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input v-model="filterPrice" v-bind:value="[200,500]"  type="radio" id="priceRange2" name="price-range" class="custom-control-input" />
                                        <label class="custom-control-label" for="priceRange2">$200 - $500</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" v-model="filterPrice" v-bind:value="[500,1000]"  id="priceARange3" name="price-range" class="custom-control-input" />
                                        <label class="custom-control-label" for="priceARange3">$500 - $1000</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="priceRange4"  v-model="filterPrice" v-bind:value="[1000,1000000]"  name="price-range" class="custom-control-input" />
                                        <label class="custom-control-label" for="priceRange4">&gt;= $1000</label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Price Filter ends -->

                        <!-- Price Slider starts -->
                        <!-- <div class="price-slider">
                            <h6 class="filter-title">Price Range</h6>
                            <div class="price-slider">
                                <div class="range-slider mt-2" id="price-slider"></div>
                            </div>
                        </div> -->
                        <!-- Price Range ends -->

                        <!-- Categories Starts -->
                        <!-- <div id="product-categories">
                            <h6 class="filter-title">Categories</h6>
                            <ul class="list-unstyled categories-list">
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category1" name="category-filter" class="custom-control-input" checked />
                                        <label class="custom-control-label" for="category1">Appliances</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category2" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category2">Audio</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category3" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category3">Cameras & Camcorders</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category4" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category4">Car Electronics & GPS</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category5" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category5">Cell Phones</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category6" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category6">Computers & Tablets</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category7" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category7">Health, Fitness & Beauty</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category8" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category8">Office & School Supplies</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category9" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category9">TV & Home Theater</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="category10" name="category-filter" class="custom-control-input" />
                                        <label class="custom-control-label" for="category10">Video Games</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        Categories Ends -->

                        <!-- Brands starts -->
                        <div class="brands">
                            <h6 class="filter-title">Brands</h6>
                            <ul class="list-unstyled brand-list">


                                <li v-for="items in brand" :key="items.id" >
                                    <div   class="custom-control custom-checkbox">

                                        <input @click="filterProducts($event)" type="checkbox"   :id="items.name" :checked="items.checked"  />
                                        <label >{{ items.name }}</label>

                                    </div>
                                    <span>633</span>
                                </li>





                            </ul>
                        </div>
                        <!-- Brand ends -->

                        <!-- Rating starts -->
                        <!-- <div id="ratings">
                            <h6 class="filter-title">Ratings</h6>
                            <div class="ratings-list">
                                <a href="javascript:void(0)">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li>& up</li>
                                    </ul>
                                </a>
                                <div class="stars-received">160</div>
                            </div>
                            <div class="ratings-list">
                                <a href="javascript:void(0)">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li>& up</li>
                                    </ul>
                                </a>
                                <div class="stars-received">176</div>
                            </div>
                            <div class="ratings-list">
                                <a href="javascript:void(0)">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li>& up</li>
                                    </ul>
                                </a>
                                <div class="stars-received">291</div>
                            </div>
                            <div class="ratings-list">
                                <a href="javascript:void(0)">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        <li>& up</li>
                                    </ul>
                                </a>
                                <div class="stars-received">190</div>
                            </div>
                        </div> -->
                        <!-- Rating ends -->

                        <!-- Clear Filters Starts -->
                        <div id="clear-filters">
                            <button type="button~" class="btn btn-block btn-primary">Clear All Filters</button>
                        </div>
                        <!-- Clear Filters Ends -->
                    </div>
                </div>
            </div>
            <!-- Ecommerce Sidebar Ends -->

        </div>
    </div>
</div>
</div>
<!-- END: Content-->


</template>

<script>

import Addtocart from './Addtocart.vue';
import Wishlist from './Wishlist.vue';

    export default {
        props:[
            'thisid',
            'user',
        ],

        components: {
    'cart':Addtocart,
    'wish':Wishlist,
  },

        data() {
        return {
            categoryId: this.thisid,
            products: [],
            loggedIn: this.user,
            brandchk: false,
            brand: {},
            selectedBrand: [],
            filterPrice:[0,1000000],
            filteractive:false,
        }
    },


    watch: {
        selectedBrand: function (value) {
            this.getItems();
        }

    },



        methods:{

                 // console.log(this.brand);




        filterProducts(event) {
                     // if checked
            if (event.target.checked) {
                this.filteractive=true;
                if (!this.selectedBrand.includes(event.target.id)) {

                    //pushing data into selectedBrand array
                      this.selectedBrand.push(event.target.id);

                    axios.get('/getFilteredItems/' + this.categoryId).then(res => {
                        let rawdata = res.data;
                        this.products = [];

                        rawdata.forEach(element => {
                            if (this.selectedBrand.includes(element.brand)) {
                                this.products.push(element);
                            }
                        });
                    }).catch(error => {
                        console.log(error);
                    })
                    console.log(this.selectedBrand);
                }
 // if not checked
            } else {
                const id = event.target.id;

                this.selectedBrand.forEach(element => {
                    if (element === id) {
                        const index = this.selectedBrand.indexOf(element);
                        this.selectedBrand.splice(index, 1);        //splice element same as brand name from array
                        //  this.getItems();
                        console.log(this.selectedBrand);
                        axios.get('/getFilteredItems/' + this.categoryId).then(res => {
                            let rawdata = res.data;
                            this.products = [];

                            rawdata.forEach(element => {
                                if (this.selectedBrand.includes(element.brand)) {

                                    this.products.push(element);
                                }
                            });
                        }).catch(error => {
                            console.log(error);
                        })
                    }
                });

if(!this.selectedBrand.length){
    this.getItems();
}


            }
        },



            getItems(){
                axios.get('/getFilteredItems/'+this.categoryId).then(res=>{

                      this.products=res.data;
                }).catch(error=>{
                    console.log("Problem in shop.vue(getItems)");
                    console.log(error);
                    })

        },


            getBrand(){

axios.get('/getBrand').then(res=>{
this.brand=res.data;
console.log(this.brand);
}).catch(error=>{
    console.log(error);
})
            },







        },

        mounted() {
            console.log('Component mounted.');
            // console.log(this.categoryId);
             this.getItems();
             this.getBrand();

        }
    }
</script>
