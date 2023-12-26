<template>


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Orders</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">


                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;" class="align-middle">
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">Order ID</th>
                                            <th class="align-middle">Billing Name</th>
                                            <th class="align-middle">Date</th>
                                            <th class="align-middle">Total</th>
                                            <th class="align-middle">Payment Status</th>
                                            <th class="align-middle">Payment Method</th>
                                            <th class="align-middle">View Details</th>
                                            <th class="align-middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr v-for="items in orders">
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                    <label class="form-check-label" for="orderidcheck01"></label>
                                                </div>
                                            </td>
                                            <td><a href="javascript: void(0);" class="text-body fw-bold">#{{ items.order_id }}</a> </td>
                                            <td>{{ items.billing_name}}</td>
                                            <td>
                                                07 Oct, 2019
                                            </td>
                                            <td class="text-info font-bold">
                                                ${{ items.price }}
                                            </td>
                                            <td>
                                                <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                            </td>
                                            <td>
                                                <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button @click="getOrderDetails(items.product_id)" type="button" class="bg-primary text-white btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    View Details
                                                </button>



                                                 <!-- Modal -->
    <div  v-show="show" class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2">Product id: <span class="text-primary">#{{ data.order_id }}</span></p>
                    <p class="mb-4">Billing Name: <span class="text-primary">{{ data.billing_name }}</span></p>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap">
                            <thead>
                                <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img :src="'../../../../storage/images/'+data.img" alt="" class="avatar-md">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">{{ data.product_name }}</h5>
                                            <p class="text-muted mb-0">$ {{ data.sub_total }} x 1</p>
                                        </div>
                                    </td>
                                    <td>${{ data.sub_total }}</td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Sub Total:</h6>
                                    </td>
                                    <td>
                                        $ {{ data.sub_total }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Shipping:</h6>
                                    </td>
                                    <td>
                                       $ {{ data.delivery }}
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Total:</h6>
                                    </td>
                                    <td>
                                        ${{ data.sub_total + data.delivery }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="bg-light border-2 border-black" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



                                            </td>
                                            <td>
                                                <div class="">


                                                     <a @click="del(items.id)" >   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 52 52" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 pt-2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                          </svg></a>




                                                </div>
                                            </td>
                                        </tr>





                                    </tbody>
                                </table>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- end modal -->




</div>


</template>

<script>
import axios from 'axios';

    export default {

        props:[
            'product_id',
        ],

        data(){

            return{
                pid:this.product_id,
                orders:{},
                order:{},
                show:false,

                'data':{
                    'billing_name':'',
                    'order_id':'',
                    'product_name':'',
                    'sub_total':'',
                    'delivery':'',
                    'total':'',
                    'img':'',
                },
            }
        },

        methods:{



getOrders(){

    axios.get('/showAllOrders').then(res=>{
this.orders=res.data;
console.log(this.orders);
    }).catch(error=>{
        console.log(error);
    })
},


del(id){

    axios.post('/delOrder/'+id).then(res=>{
this.getOrders();
    }).catch(error=>{
        console.log(error);
    })
},


           getOrderDetails(id){


            axios.get('/getSelectedOrder/'+id).then(res=>{
                this.order=res.data;
                this.data.billing_name=this.order.billing_name;
                this.data.order_id=this.order.order_id;
                this.data.product_name=this.order.title;
                this.data.sub_total=this.order.price;
                this.data.delivery=this.order.dCharges;
                this.data.total=this.order.price + this.order.dCharges;
                this.data.img=this.order.image;




            }).catch(error=>{
                console.log(error);
            })

           }
        },
        mounted() {
            console.log('Component mounted.');
            this.getOrders();

        }
    }
</script>
