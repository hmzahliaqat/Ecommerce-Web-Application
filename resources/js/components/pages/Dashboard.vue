<template>





  <!-- BEGIN: Content-->
  <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <!-- <section id="nav-filled">
                    <div class="row match-height">

                        <div class="col-xl-12 col-lg-12">
                            <div class="card">

                                <div class="card-body">

                                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="messages-tab-fill" data-toggle="tab" href="#messages-fill" role="tab" aria-controls="messages-fill" aria-selected="false">Messages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="settings-tab-fill" data-toggle="tab" href="#settings-fill" role="tab" aria-controls="settings-fill" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>



                                </div>
                            </div>
                        </div>
                        </div>
                        </section> -->
                        <!-- Filled Tabs ends -->

                        <div class="custom-control custom-switch custom-switch-primary">

<input type="checkbox" class="custom-control-input" id="customSwitch10" checked />
<label class="custom-control-label" for="customSwitch10">



    <a href="/sellerTerminate"> <span class="switch-icon-left mt-0.5 pt-0.5"><i data-feather="check"></i></span></a>



</label>
</div>


                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Hamza Liaqat</h5>
                                    <p class="card-text font-small-3">seller since 1 month agao</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="javascript:void(0);">87 products</a>
                                    </h3>


                          <form action="/add" method="post">
      <!-- Equivalent to... -->
      <input type="hidden" name="_token" :value="csrf">

                              <button type="submit" class="btn btn-primary">Add Product</button>

                              </form>

                                    <img src="../../../../public/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-info mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="media">
                                                <div class="avatar bg-light-danger mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">{{ totalProducts }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="media">
                                                <div class="avatar bg-light-success mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">${{ Revenue }}</h4>
                                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>





                    <div class="row match-height">




                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="../../../../public/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0"></h6>
                                            <h3 class="mb-0">{{ day }}</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">{{ shopdetails.name }}</h4>
                                            <p class="card-text mb-0">Meet world popular developers</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="media mt-2">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">{{ shopdetails.state }}</h6>
                                            <small>{{ shopdetails.address }}</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                        <!-- Company Table Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Posted at</th>

                                                </tr>
                                            </thead>

                                            <tbody>

<!------------------------------------------ products list table------------------------------------------------------------- -->
                                                <tr v-for="items in products">
                                                    <td>
                                                        <div  class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img class="" :src="'../../../../storage/images/'+items.image" alt="" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class=" ml-2 font-weight-bolder">{{ items.title }}</div>

                                                            </div>
                                                        </div>
                                                   </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <span>{{ items.created_at }}</span>
                                                        </div>
                                                    </td>

                                                </tr>

                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                                <a href="/showAllProducts" class=" border-2 text-center rounded-md cursor-pointer hover:bg-none bg-primary w-full">
                            <button class="text-white font-bold">Show All</button>
                        </a>
                            </div>
                        </div>


                        <div class="row col-12 mb-2" id="basic-table">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">       <a href="/getallorders" class=" border-2 text-center rounded-md cursor-pointer float-right hover:bg-none bg-primary w-full">
                            <button class="text-white font-bold">Show All</button>
                        </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="items in orders">
                                            <td>
                                                        <div  class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img class="" :src="'../../../../storage/images/'+items.image" alt="" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class=" ml-2 font-weight-bolder">{{ items.title }}</div>

                                                            </div>
                                                        </div>
                                                   </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Lilian Nenez">
                                                        <img src="../../../../public/images/portrait/small/avatar-s-26.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                        <img src="../../../../public/images/portrait/small/avatar-s-23.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="Alberto Glotzbach">
                                                        <img src="../../../../public/images/portrait/small/avatar-s-22.jpg" alt="Avatar" height="26" width="26" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i data-feather="edit-2" class="mr-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->


                        <!--/ Company Table Card -->

                        <!-- Developer Meetup Card -->

                        <!--/ Developer Meetup Card -->

                        <!-- Browser States Card -->

                        <!--/ Browser States Card -->

                        <!-- Goal Overview Card -->
                        <!-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Goal Overview</h4>
                                    <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                                </div>
                                <div class="card-body p-0">
                                    <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                                    <div class="row border-top text-center mx-0">
                                        <div class="col-6 border-right py-1">
                                            <p class="card-text text-muted mb-0">Completed</p>
                                            <h3 class="font-weight-bolder mb-0">786,617</h3>
                                        </div>
                                        <div class="col-6 py-1">
                                            <p class="card-text text-muted mb-0">In Progress</p>
                                            <h3 class="font-weight-bolder mb-0">13,561</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--/ Goal Overview Card -->

                        <!-- Transaction Card -->

                        <!--/ Transaction Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
</template>

<script>
import axios from 'axios';
import { TailwindPagination } from 'laravel-vue-pagination';
    export default {
components:{
    'pagination':TailwindPagination,
},


        data(){
return{
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            products:{},
            totalProducts:null,
            shopdetails:{},
            date:null,
            day:null,
            orders:{},
            Revenue:null,

}
},


methods:{

getday(){

    const date = new Date();
    this.day = new Date().toJSON().slice(0,10).replace(/-/g,'/').substring(0,4);
        //   this.day = date.getDay();

},

getOrders(){

    axios.get('/getorders').then(res=>{
        this.orders=res.data;
  }).catch(error=>{
        console.log(error);
    })

},


    getTotalProducts(){
        axios.get('/getTotalProducts').then(res=>{
this.products=res.data;
console.log(this.products);
        }).catch(error=>{
            console.log(error);
        })
    },


    getProductCount(){
        axios.get('/getProductsCount').then(res=>{
       this.totalProducts=res.data;
       console.log(this.totalProducts);
        }).catch(error=>{
            console.log(error);
        })
    },


    getShopDetails(){

        axios.get('/getShopDetails').then(res=>{
            this.shopdetails=res.data;
            console.log(this.shopdetails);

        }).catch(error=>{
            console.log(error);
        })

    },


    getRevenue(){
        axios.get('/getRevenue').then(res=>{
            this.Revenue=res.data;

          }).catch(error=>{
            console.log(error);
        })
    }



},


mounted() {
            console.log('Component mounted.');
            this.getTotalProducts();
            this.getProductCount();
            this.getShopDetails();
            this.getday();
            this.getOrders();
            this.getRevenue();
        }
    }
</script>
