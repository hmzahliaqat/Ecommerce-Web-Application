<template>

<div id="place-order" class="list-view product-checkout">

                            <!-- Checkout Place Order Left starts -->

<KeepAlive>
     <div v-for="item in cart" class="checkout-items">
 <div  class="card ecommerce-card">
                                    <div class="item-img">
                                        <a href="app-ecommerce-details.html">
                                            <img src="../../../../../public/images/pages/eCommerce/10.png" alt="img-placeholder" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <h6 class="mb-0">
                                                <a href="app-ecommerce-details.html" class="text-body">{{ item.title }} </a>
                                            </h6>
                                            <span class="item-company">By <a href="javascript:void(0)" class="company-name">Sharp</a></span>
                                            <div class="item-rating">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="text-success mb-1">In Stock</span>
                                        <!-- <div class="item-quantity">
                                            <span class="quantity-title">Qty:</span>
                                           <div div class="input-group">
                                                <input type="number" class="touchspin" value="1" />
                                            </div>
                                        </div> -->
                                        <span class="delivery-date text-muted">Delivery by, Wed Apr 30</span>
                                        <span class="text-success">6% off 3 offers Available</span>
                                    </div>
                                    <div class="item-options text-center">
                                        <div class="item-wrapper">
                                            <div class="item-cost">
                                                <h4 class="item-price">${{ item.price }}</h4>
                                            </div>
                                        </div>
                                        <button @click.prevent="removeFromCart(item.id)" type="submit" class="btn btn-light mt-1 remove-wishlist">
                                            <i data-feather="x" class="align-middle mr-25"></i>
                                            <span>Remove</span>
                                        </button>
                                        <button  @click.prevent="moveToWishlist(item.id)" type="submit" class="btn btn-primary btn-cart move-cart">
                                            <i data-feather="heart" class="align-middle mr-25"></i>
                                            <span class="text-truncate">Add to Wishlist</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </KeepAlive>
                            <!-- Checkout Place Order Left Ends -->

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

</template>

<script>
import axios from 'axios';

    export default {



        data(){

            return{
                cart:{},
                total:{},
                dCharges:null,


            }
        },

        methods:{

            moveToWishlist(pid){
                this.getItem();
                this.cartPrice();
// move item to wishlist from cart
axios.post('/addToWishlist',{'product_id':pid}).then(res=>{

    toastr['success']('', 'Item moved to wishlist ❤️', {
          closeButton: true,
          tapToDismiss: false,
        });

}).catch(error=>{
    console.log(error);


    });

// remove item from cart after moving to wishlist

axios.post('/remove', { 'product_id': pid }).then(res => {})
.catch(error => {
    console.log(error);
           })


            },


            removeFromCart(pid){

                axios.post('/remove', { 'product_id': pid }).then(res => {
                    this.getItem();
                    this.cartPrice();


            toastr['error']('', 'Removed Item 🗑️', {
                closeButton: true,
                tapToDismiss: false,
            });


    }).catch(error => {
        console.log(error);
    })


},


            getItem(){
                axios.get('/getitem').then(res=>{
                    this.cart=res.data;
                  //  console.log(this.cart);

                }).catch(error=>{
                    console.log(error);
                })
            },

            cartPrice(){
                axios.get('/getitemprice').then(res=>{
                   this.total=res.data;
                   //console.log(this.total);
                }).catch(error=>{
                    console.log(error);
                })
            },
            cartDelivery(){
                axios.get('/getdeliveryprice').then(res=>{
                    this.dCharges=res.data;
console.log(this.dCharges);
                }).catch(error=>{
                    console.log(error);
                })
            }


        },



        mounted() {
            console.log('Component mounted.')
        this.getItem();
        this.cartPrice();
        this.cartDelivery();






        }
    }
</script>
