<template>


<section id="ecommerce-products" class="grid-view">




                    <div v-for="items in products" class="card ecommerce-card">


                        <span class="badge badge-pill badge-light-warning ">Out Of Stock</span>



                        <div class="item-img text-center">

                            <a href="#">
                                <img class="img-fluid card-img-top" src="../../../../public/images/pages/eCommerce/12.png" alt="img-placeholder" />
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
                                    <h6 class="item-price">$200</h6>
                                </div>
                            </div>
                            <h6 class="item-name">
                                <a class="text-body" href="app-ecommerce-details.html">product 1</a>

                                <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Apple</a></span>
                            </h6>
                            <p class="card-text item-description">
                            nfbkjdks dbjsbdkjskd jdskjbdsk  dkjsnkjdnkdnk
                            </p>
                        </div>


                            <cart :is="activeComponent" :user='1'  :product_id=2 ></cart>
                            <wish :is="activeComponent" :user='1'  :product_id=2 ></wish>


                    </div>

                    <pagination :data="products" @pagination-change-page="getProducts"></pagination>


                </section>

</template>

<script>
import axios from 'axios';

    export default {


        data(){
            return{
                products:{},
            }
        },

        methods:{

            getProducts(page=1){
                axios.get('/getAllProducts').then(res=>{
                    this.products=res.data;
                })

            },

        },



        mounted() {
            console.log('Component mounted.')
            this.getProducts();
        }
    }
</script>
