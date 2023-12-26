<template>

<li class="nav-item dropdown dropdown-cart mr-25"><a @click="getData()" class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span class="badge badge-pill badge-primary badge-up cart-item-count">{{ cart.length }}</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">My Cart</h4>


                                <div class="badge badge-pill badge-light-primary">{{ cart.length }} Item</div>

                                <!-- <div class="badge badge-pill badge-light-primary">2 Items</div> -->


                            </div>
                        </li>




                        <li v-for="items in cart" class="scrollable-container media-list ">

                            <div class="media align-items-center"><img class="d-block rounded mr-1" :src="'../../../../storage/images/'+items.image" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" :href="'/productdetails'+items.id">{{ items.title }}</a></h6><small class="cart-item-by">{{ items.brand }}</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <!-- <input class="touchspin-cart" type="number" value="1"> -->
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">${{ items.price }}</h5>
                                </div>
                            </div>
                        </li>

 <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="font-weight-bolder mb-0">Total:</h6>
                                <h6 class="text-primary font-weight-bolder mb-0">${{ total }}</h6>
                            </div><a class="btn btn-primary btn-block" href="/checkout">Checkout</a>
                        </li>
                    </ul>
                </li>


</template>

<script>
import axios from 'axios'

    export default {


        data(){
            return{
                cart:{},
                total:null,


            }
        },

        methods:{

            getData(){
                axios.get('/getitem').then(res=>{
                    this.cart=res.data;
                    // console.log(this.cart);
                }).catch(error=>{

                    console.log(error);
                })
            },


gettotal(){
    axios.get('/getitemprice').then(res=>{
this.total=res.data;
    }).catch(error=>{
        console.log(error);
    })
}


        },




        mounted() {
            console.log('Component mounted.')
this.getData();
this.gettotal();

        }
    }
</script>
