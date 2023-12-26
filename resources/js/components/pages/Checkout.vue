<template>
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Checkout</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active">Checkout
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
            <div class="content-body">
                <div class="bs-stepper checkout-tab-steps">
                    <!-- Wizard starts -->
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#step-cart">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="shopping-cart" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Cart</span>
                                    <span class="bs-stepper-subtitle">Your Cart Items</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <div class="step" data-target="#step-address">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="home" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Address</span>
                                    <span class="bs-stepper-subtitle">Enter Your Address</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <i data-feather="chevron-right" class="font-medium-2"></i>
                        </div>
                        <!-- <div class="step" data-target="#step-payment">
                            <button type="button" class="step-trigger">
                                <span class="bs-stepper-box">
                                    <i data-feather="credit-card" class="font-medium-3"></i>
                                </span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Payment</span>
                                    <span class="bs-stepper-subtitle">Select Payment Method</span>
                                </span>
                            </button>
                        </div> -->
                    </div>
                    <!-- Wizard ends -->
<!-----------------------------------------------------------------Cart Section Starts Here--------------------------------------------------------------->
                    <div class="bs-stepper-content">
                        <!-- Checkout Place order starts -->
                        <div id="step-cart" class="content">
                            <div id="place-order" class="list-view product-checkout">
                                <!-- Checkout Place Order Left starts -->
                                <KeepAlive>
                                <div v-for="items in cart" class="checkout-items">
                                    <div class="card ecommerce-card">
                                        <div class="item-img">
                                            <a href="app-ecommerce-details.html">
                                                <img :src="'../../../../storage/images/'+items.image" alt="img-placeholder" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-name">
                                                <h6 class="mb-0"><a href="app-ecommerce-details.html" class="text-body">{{ items.title }}</a></h6>
                                                <span class="item-company">By <a href="javascript:void(0)" class="company-name">{{ items.brand }}</a></span>
                                                <div class="item-rating">
                                                    <ul class="unstyled-list list-inline">
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="text-success mb-1">In Stock</span>
                                            <!-- <div class="item-quantity">
                                                <span class="quantity-title">Qty:</span>
                                                <div class="input-group quantity-counter-wrapper">
                                                    <input type="text" class="quantity-counter" value="1" />
                                                </div>
                                            </div> -->
                                            <!-- <span class="delivery-date text-muted">Delivery by, Wed Apr 25</span>
                                            <span class="text-success">17% off 4 offers Available</span> -->
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                <div class="item-cost">
                                                    <h4 class="item-price">${{ items.price }}</h4>
                                                    <p class="card-text shipping">
                                                        <span class="badge badge-pill badge-light-success">Free Shipping</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <button @click="removeFromCart(items.id)" type="submit" class="btn btn-light mt-1 remove-wishlist">
                                                <i data-feather="x" class="align-middle mr-25"></i>
                                                <span>Remove</span>
                                            </button>
                                            <button @click="moveToWishlist(items.id)" type="submit" class="btn btn-primary btn-cart move-cart">
                                                <i data-feather="heart" class="align-middle mr-25"></i>
                                                <span class="text-truncate">Move to Wishlist</span>
                                            </button>
                                        </div>
                                    </div>
                                  </div>
                            </KeepAlive>
                                <!-- Checkout Place Order Left ends -->

                                <!-- Checkout Place Order Right starts -->
                                <div class="checkout-options">
                                    <div class="card">
                                        <div class="card-body">
                                            <label class="section-label mb-1">Options</label>
                                            <div class="coupons input-group input-group-merge">
                                                <input type="text" class="form-control" placeholder="Coupons" aria-label="Coupons" aria-describedby="input-coupons" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-primary" id="input-coupons">Apply</span>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="price-details">
                                                <h6 class="price-title">Price Details</h6>
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title">Total MRP</div>
                                                        <div class="detail-amt">${{ total }}</div>
                                                    </li>

                                                    <li class="price-detail">
                                                        <div class="detail-title">EMI Eligibility</div>
                                                        <a href="javascript:void(0)" class="detail-amt text-primary">Details</a>
                                                    </li>
                                                    <li class="price-detail">
                                                        <div class="detail-title">Delivery Charges</div>
                                                        <div v-if="dCharges==0" class="detail-amt discount-amt text-success">Free</div>
                                                    <div v-else class="detail-amt discount-amt text-success">${{ dCharges }}</div>
                                                    </li>
                                                </ul>
                                                <hr />
                                                <ul class="list-unstyled">
                                                    <li class="price-detail">
                                                        <div class="detail-title detail-total">Total</div>
                                                        <div class="detail-amt font-weight-bolder">${{ total + dCharges }}</div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-primary btn-block btn-next place-order">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkout Place Order Right ends -->
                                </div>
                            </div>
                            <!-- Checkout Place order Ends -->
                        </div>
                        <!-- Checkout Customer Address Starts -->
<!-----------------------------------------------------------------Cart Section Ends Here--------------------------------------------------------------->


<!-----------------------------------------------------------------Address Section Starts Here--------------------------------------------------------------->
                        <div  id="step-address" class="content">
                            <form id="checkout-address" class="list-view product-checkout">
                                <!-- Checkout Customer Address Left starts -->
                                <div v-if="!addressUpdate" class="card">
                                    <div class="card-header flex-column align-items-start">
                                        <h4 class="card-title">Add New Address</h4>
                                        <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-name">Full Name:</label>
                                                    <input v-model="address.name" type="text" id="checkout-name" class="form-control" name="name" placeholder="John Doe" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-number">Mobile Number:</label>
                                                    <input type="number" v-model="address.mob" id="checkout-number" class="form-control" name="mob" placeholder="0123456789" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-apt-number">Flat, House No:</label>
                                                    <input type="text" v-model="address.flat" id="checkout-apt-number" class="form-control" name="flat" placeholder="9447 Glen Eagles Drive" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                                                    <input type="text" v-model="address.landmark" id="checkout-landmark" class="form-control" name="landmark" placeholder="Near Apollo Hospital" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-city">Town/City:</label>
                                                    <input type="text" v-model="address.city" id="checkout-city" class="form-control" name="city" placeholder="Tokyo" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-pincode">Zipcode:</label>
                                                    <input type="number" v-model="address.zipcode" id="checkout-pincode" class="form-control" name="zipcode" placeholder="201301" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-state">State:</label>
                                                    <input type="text" v-model="address.state" id="checkout-state" class="form-control" name="state" placeholder="California" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label  for="add-type">Address Type:</label>
                                                    <select v-model="address.type" class="form-control" id="add-type">
                                                        <option value=0>Home</option>
                                                        <option value=1>Work</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <!-- btn-next delivery-address -->
                                                <KeepAlive>
                                            <div class="col-12">
                                                <button type="submit" @click.prevent="store()" id="btnAddress" class="btn btn-primary ">Save </button>
                                            </div>
                                            </KeepAlive>
                                        </div>
                                    </div>
                                </div>

                                <!--Address Update  -->
                                <div v-else class="card">
                                    <div class="card-header  flex-column align-items-start">
                                        <h4 class="card-title text-info">Update Address</h4>
                                        <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-name">Full Name:</label>
                                                    <input v-model="update.name" type="text" id="checkout-name" class="form-control" name="name" placeholder="John Doe" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-number">Mobile Number:</label>
                                                    <input type="number" v-model="update.mob" id="checkout-number" class="form-control" name="mob" placeholder="0123456789" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-apt-number">Flat, House No:</label>
                                                    <input type="text" v-model="update.flat" id="checkout-apt-number" class="form-control" name="flat" placeholder="9447 Glen Eagles Drive" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                                                    <input type="text" v-model="update.landmark" id="checkout-landmark" class="form-control" name="landmark" placeholder="Near Apollo Hospital" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-city">Town/City:</label>
                                                    <input type="text" v-model="update.city" id="checkout-city" class="form-control" name="city" placeholder="Tokyo" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-pincode">Zipcode:</label>
                                                    <input type="number" v-model="update.zipcode" id="checkout-pincode" class="form-control" name="zipcode" placeholder="201301" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label for="checkout-state">State:</label>
                                                    <input type="text" v-model="update.state" id="checkout-state" class="form-control" name="state" placeholder="California" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mb-2">
                                                    <label  for="add-type">Address Type:</label>
                                                    <select v-model="update.type" class="form-control" id="add-type">
                                                        <option value=0>Home</option>
                                                        <option value=1>Work</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <!-- btn-next delivery-address -->
                                                <KeepAlive>
                                            <div class="col-12">
                                                <KeepAlive>
                                                <button type="submit" @click.prevent="updateAdd(update.id)"   id="btnAddress" class="btn btn-info ">Update</button>
                                            </KeepAlive>
                                            &nbsp;
                                                <button type="submit" @click.prevent="terminate()"   class="btn btn-danger ">Cancel</button>

                                            </div>

                                            </KeepAlive>
                                        </div>
                                    </div>
                                </div>


                                <!--  Address Left section ends -->

                                <!--  Address Right section starts -->
                                <KeepAlive>
                            <div   class="customer-card">
                                <div v-if="homeAddress.length" v-for="items in homeAddress" class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ items.name }}</h4>
                                        <div class="">
                                       <a @click.prevent="getUpdateItem(items.id)"  style="cursor: pointer;"><i class="card-title text-success  fa-solid fa-pen-to-square"></i></a>
                                   <KeepAlive>
                                       <a @click.prevent="del(items.id)" style="cursor: pointer;"><i class=" ml-1 text-danger fa-solid fa-trash"></i></a>
                                    </KeepAlive>
                                    </div>

                                        <h4 v-if="items.type==0" class="card-title text-success">Home</h4>
                                        <h4 v-else class="card-title text-info">Office</h4>

                                    </div>
                                    <div class="card-body actions">
                                        <p class="card-text mb-0">{{ items.flat }}</p>
                                        <p class="card-text mb-0">{{ items.landmark }}</p>
                                        <p class="card-text">{{ items.state }}</p>
                                        <p class="card-text">{{ items.zipcode }}</p>
                                        <p class="card-text">{{ items.mob }}</p>
                                        <a  :href="'/test/' + [items.id]" class="btn btn-primary btn-block btn-next delivery-address mt-2">
                                            Deliver To This Address
                                        </a>

                                    </div>
                                   </div>
                                </div>
                            </KeepAlive>
                                <!--  Address Right section ends -->

                            </form>



                        </div>
                        <!-- Checkout Customer Address Ends -->
<!-----------------------------------------------------------------Address Section Ends Here--------------------------------------------------------------->

<!-----------------------------------------------------------------Payment Section Starts Here--------------------------------------------------------------->
                        <div id="step-payment" class="content">
                            <form id="checkout-payment" class="list-view product-checkout"

                             method="post"
                              @submit.prevent="pay()" onsubmit="return false;">

                                <input type="hidden" name="_token" :value="csrf">

                                <div class="payment-type">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start">
                                            <h4 class="card-title">Payment options</h4>
                                            <p class="card-text text-muted mt-25">Be sure to click on correct payment option</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="credit-card">Name On Card </label>
                                            <input type="text" v-model="payment.nameOnCard" nane="nameOnCard" class="form-control credit-card-mask" placeholder="Full name"  />
                                        </div>
                                                <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="credit-card">Card Number</label>
                                            <input type="text" v-model="payment.cardNumber" name="cardNumber" class="form-control credit-card-mask" placeholder="0000000000000000" id="credit-card" />
                                    </div>
                                                                            </div>

                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="date">CVC</label>
                                            <input type="text" v-model="payment.cvc" name="cvc" class="form-control " placeholder="eg.334" id="cvc" />
                                        </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="date">Exp. Month</label>
                                            <input type="text" v-model="payment.exp_month" name="exp_month" class="form-control date-mask" placeholder="MM" id="month" />
                                        </div>

                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="date">Exp. Year</label>
                                            <input type="text" v-model="payment.exp_year" name="exp_year" class="form-control date-mask" placeholder="YYYY" id="month" />
                                        </div>

                                        <button type="submit"   class="btn btn-primary btn-block  mt-2">
                                            Pay Now (${{total + dCharges  }})
                                        </button>
                        </div>






                                            <hr class="my-2" />

                                        </div>
                                    </div>
                                </div>

                                <div class="amount-payable checkout-options">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Price Details</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled price-details">
                                                <li class="price-detail">
                                                    <div class="details-title">Price of 3 items</div>
                                                    <div class="detail-amt">
                                                        <strong>${{ total }}</strong>
                                                    </div>
                                                </li>
                                                <li class="price-detail">
                                                    <div class="details-title">Delivery Charges</div>
                                                    <div v-if="dCharges==0" class="detail-amt discount-amt text-success">Free</div>
                                                    <div v-else class="detail-amt discount-amt text-success">${{ dCharges }}</div>

                                                </li>
                                            </ul>
                                            <hr />
                                            <ul class="list-unstyled price-details">
                                                <li class="price-detail">
                                                    <div class="details-title">Amount Payable</div>
                                                    <div class="detail-amt font-weight-bolder">${{ total + dCharges }}</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
<!-----------------------------------------------------------------Payment Section Ends Here--------------------------------------------------------------->


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->



</template>

<script>

// includes------------
//1.Cart Section
//2.Address Section
//3.Payment Section
import axios from 'axios';


  export default {



    data() {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        return {
            publishbaleKey:'pk_test_51KfJGZFmPpgFTN4qszvpWIQNHDJheZrQrhSHnqfalsrQHw3IXBiOHUB5rTG3tG60CEwoxtviYQBDZ83IM1ivktQO008H5rUqnK',
            myAddress:'',
            token:null,
            cart: {},
            total: {},
            dCharges: null,
            updateBtn: false,
            homeAddress: {},
            addressUpdate:false,

            'payment':{
                'nameOnCard':'',
                'cardNumber':'',
                'cvc':'',
                'exp_month':'',
                'exp_year':'',

            },

            'address': {
                'name': '',
                'mob': '',
                'flat': '',
                'landmark': '',
                'city': '',
                'zipcode': '',
                'state': '',
                'type': '',

            },
            'update': {
                'id':'',
                'name': '',
                'mob': '',
                'flat': '',
                'landmark': '',
                'city': '',
                'zipcode': '',
                'state': '',
                'type': '',

            }

        }
    },


methods:{
    //                   --------This is cart Section------------

    selectedAddress(address){

        this.myAddress=address;


    },

    pay(){

        axios.post('/stripe/'+this.myAddress,this.payment).then(res=>{


        }).catch(error=>{
            console.log(error);
        })
    },





    // Moving Items To Wishlist From Cart
    moveToWishlist(pid) {
            this.getItem();
            this.cartPrice();
            this.cartDelivery();
            // remove item from cart before moving to wishlist
            axios.post('/remove', { 'product_id': pid }).then(res => { })
                .catch(error => {
                    console.log(error);
                })

            axios.post('/addToWishlist', { 'product_id': pid }).then(res => {
                toastr['success']('', 'Item moved to wishlist ❤️', {
                    closeButton: true,
                    tapToDismiss: false,
                });
            }).catch(error => {
                console.log(error);
            });
        },

// Remove Item From Cart
        removeFromCart(pid) {
            axios.post('/remove', { 'product_id': pid }).then(res => {
                this.getItem();
                this.cartPrice();
                this.cartDelivery();
                toastr['error']('', 'Removed Item 🗑️', {
                    closeButton: true,
                    tapToDismiss: false,
                });
            }).catch(error => {
                console.log(error);
            })
        },

        // Get Item In Cart
        getItem() {
            axios.get('/getitem').then(res => {
                this.cart = res.data;
                  console.log(this.cart);

            }).catch(error => {
                console.log(error);
            })
        },

        // Get Price Of Cart Items
            cartPrice(){
                axios.get('/getitemprice').then(res=>{
                   this.total=res.data;
                   //console.log(this.total);
                }).catch(error=>{
                    console.log(error);
                })
            },

            // Get Delivery Charges of products in Cart
            cartDelivery() {
            axios.get('/getdeliveryprice').then(res => {
                this.dCharges = res.data;
                console.log(this.dCharges);
            }).catch(error => {
                console.log(error);
            })
        },

//            --------------This is address section---------------

    // Store User Address
    store() {
            if (this.homeAddress.length <= 1) {
                axios.post('/newAddress', this.address).then(res => {
                    toastr['success']('', 'Address Added 🛒', {
                        closeButton: true,
                        tapToDismiss: false,
                    });
                }).catch(error => {
                    console.log(error);
                    toastr['error']('', 'Failed 🛒', {
                        closeButton: true,
                        tapToDismiss: false,
                    });
                })
                this.getHomeAddress();
            } else {
                this.updateBtn = true;
            }
            //Clear inputs after submission
            this.address = {
                'name': '',
                'mob': '',
                'flat': '',
                'landmark': '',
                'city': '',
                'zipcode': '',
                'state': '',
                'type': '',
            }
        },
        //Get Update item
        getUpdateItem(id){

        this.addressUpdate=true;
        axios.get('getUpdateItem/'+id).then(res=>{
            this.update.id=res.data.id;
            this.update.name=res.data.name;
            this.update.mob=res.data.mob;
            this.update.flat=res.data.flat;
            this.update.landmark=res.data.landmark;
            this.update.city=res.data.city;
            this.update.zipcode=res.data.zipcode;
            this.update.state=res.data.state;
            this.update.type=res.data.type;



        }).catch(error=>{
        console.log(error);
        })
        },

        //Update Addresss
        updateAdd(id){

            axios.post('/updateAddress/'+id,this.update).then(res=>{
                this.getHomeAddress();

                toastr['success']('', 'Address Updated', {
                    closeButton: true,
                    tapToDismiss: false,
                });
            }).catch(error=>{
                console.log(error);
                toastr['error']('', 'Something Went Wrong', {
                    closeButton: true,
                    tapToDismiss: false,
                });

            })
        },

        //Get User Addresses
        getHomeAddress() {
            axios.get('/getAddress').then(res => {
                this.homeAddress = res.data;
                console.log(this.homeAddress);
            }).catch(error => {
                console.log(error);
            })
        },

        //Delete User Address
        del(id) {
            axios.post('/deleteAddress/' + id).then(res => {
                toastr['info']('', 'Address Deleted', {
                    closeButton: true,
                    tapToDismiss: false,
                });
                this.getHomeAddress();

            }).catch(error => {
                console.log(error);
            })

        },
        terminate(){
        this.addressUpdate=false;
        },

        //popup model when user reach address limit=2
        modelClose() {
            this.updateBtn = false;
        },








  },


        mounted() {
            console.log('Component mounted.')
            // console.log(this.pid);
            this.getItem();
        this.cartPrice();
        this.cartDelivery();
        this.getHomeAddress();




        axios.post('/initiatePayment', {
        amount: 150,
        currency: 'USD'
    }).then(response => {
        this.token = response.data.token // Use to identify the payment
        stripe.value = Stripe(pk_test_51KfJGZFmPpgFTN4qszvpWIQNHDJheZrQrhSHnqfalsrQHw3IXBiOHUB5rTG3tG60CEwoxtviYQBDZ83IM1ivktQO008H5rUqnK);
        const options = {
            clientSecret: response.clientSecret,
        }

        elements.value = stripe.value.elements(options);
        const paymentElement = elements.value.create('payment');
        paymentElement.mount('#payment-element');
    }).catch(error => {
        console.log(error)
    })


        }
    }
</script>
