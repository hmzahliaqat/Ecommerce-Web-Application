<template>

 <!-- ============================================================== -->
               <!-- Start right Content here -->

               <!-- <button v-on:click="isHidden = true">Hide the text below</button>
     <button v-on:click="isHidden = !isHidden">Toggle hide and show</button> -->

               <!-- ============================================================== -->

               <div>
                <!-- <a href="javascript:void(0)" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
        <i data-feather="shopping-cart" class="mr-50"></i>
        <span class="add-to-cart">Add to cart</span>
    </a> -->
                   <div class="page-content">
                       <a href="/seller" class="btn btn-danger"> <i style="margin-bottom: 1px;" data-feather="x"></i> Back </a>
   <form method="post" enctype="multipart/form-data"  @submit.prevent="update()">
                       <div class="container-fluid">

                           <!-- start page title -->
                           <div class="row">
                               <div class="col-12">
                                   <div class="page-title-box d-flex align-items-center justify-content-between">
                                       <h4 class="mb-0">Add Product</h4>

                                       <div class="page-title-right">
                                           <ol class="breadcrumb m-0">
                                               <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                               <li class="breadcrumb-item active">Add Product</li>
                                           </ol>
                                       </div>

                                   </div>
                               </div>
                           </div>
                           <!-- end page title -->

                           <div class="row">
                               <div class="col-lg-12">
                                   <div id="addproduct-accordion" class="custom-accordion">
                                       <div class="card">
                                           <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                                               <div class="p-4">

                                                   <div class="d-flex align-items-center">
                                                       <div class="flex-shrink-0 me-3">
                                                           <div class="avatar-sm">
                                                               <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                   01
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="flex-grow-1 overflow-hidden">
                                                           <h5 class="font-size-16 mb-1">Product Info</h5>
                                                           <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                       </div>
                                                       <div class="flex-shrink-0">
                                                           <i data-feather='chevron-down'></i>
                                                       </div>

                                                   </div>

                                               </div>
                                           </a>

                                           <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                               <div class="p-4 border-top">

                                                       <div class="mb-3">
                                                           <label class="form-label" for="productname">Product Name</label>
                                                           <input v-model="product.title" id="productname" name="productname" placeholder="Enter Product Name" type="text" class="form-control">
                                                          <p style="color: red;" v-if="error.title">Title is required</p>


                                                       </div>
                                                       <div class="row">
                                                           <div class="col-lg-4">

                                                               <div class="mb-3">
                                                                   <label class="form-label" for="manufacturername">Brand Name</label>
                                                                   <input v-model="product.brand" id="manufacturername" name="productbrand" placeholder="Enter Brand Name" type="text" class="form-control">
                                                                   <p style="color: red;" v-if="error.brand">Brand Name is required</p>

                                                               </div>
                                                           </div>
                                                           <div class="col-lg-4">

                                                               <div class="mb-3">
                                                                   <label class="form-label" for="manufacturerbrand">Product Price</label>
                                                                   <input v-model="product.price" id="manufacturerbrand" name="productprice" placeholder="Enter Product Price" type="text" class="form-control">
                                                                   <p style="color: red;" v-if="error.price">{{ error.price }}</p>

                                                               </div>
                                                           </div>
                                                           <div class="col-lg-4">
                                                               <div class="mb-3">
                                                                   <label class="form-label" for="price">Dilevery Charges</label>
                                                                   <input v-model="product.dCharges" id="price" name="deliverycharges" placeholder="Enter Dilevery Charges" type="text" class="form-control">
                                                                   <p style="color: red;" v-if="error.dCharges">{{ error.dCharges }}</p>

                                                               </div>
                                                           </div>
                                                       </div>


                                                       <div class="col-lg-12 col-md-6">
                                                       <div class="mb-3">
                                                           <label for="choices-single-groups" class="form-label font-size-13 text-muted">Select
                                                               Category</label>
                                                           <select v-model="product.category" class="form-control" data-trigger name="choices-single-groups"
                                                               id="choices-single-groups">

                                                               <optgroup label="Groceries & Pets / Beverages">
                                                                   <option value=1>Coffee</option>
                                                                   <option value="2">Tea</option>
                                                                   <option value=3>Hot Chocolate Coffee </option>
                                                                   <option value=4>Milk & Milk Powders</option>
                                                                   <option value=5>Flavouring Syrups</option>
                                                                   <option value=6>Juices</option>
                                                               </optgroup>

                                                           </select>
                                                           <p style="color: red;" v-if="error.category">Please select product category</p>

                                                       </div>
                                                   </div>

                                                   <div class="mb-0">
                                                           <label  class="form-label" for="productdesc">Product Description</label>
                                                           <textarea v-model="product.discription" class="form-control" name="discription" id="productdesc" placeholder="Enter Description" rows="4"></textarea>
                                                           <p style="color: red;" v-if="error.discription">Product discription is required</p>


                                                       </div>

                                               </div>
                                           </div>
                                       </div>

                                       <div class="card">
                                           <a href="#addproduct-img-collapse"  class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false"  aria-controls="addproduct-img-collapse">
                                               <div class="p-4">

                                                   <div class="d-flex align-items-center">
                                                       <div class="flex-shrink-0 me-3">
                                                           <div class="avatar-sm">
                                                               <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                   02
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="flex-grow-1 overflow-hidden">
                                                           <h5 class="font-size-16 mb-1">Product Image</h5>
                                                           <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                                       </div>
                                                       <div class="flex-shrink-0">
                                                           <i data-feather='chevron-down'></i>
                                                       </div>

                                                   </div>

                                               </div>
                                           </a>


                                           <div id="addproduct-img-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                               <div class="p-4 border-top">

                                                   <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange"   id="img1" type="file" name="image" />

                                                      <img :src="url1" v-if="url1" style="width: 100%;" alt="">

                                                       <img v-else :src="'../../../../storage/images/'+product.image" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>


                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange2"  id="img2" type="file" name="image2" />

                                                       <img :src="url2" v-if="url2" style="width: 100%;" alt="">


                                                       <img v-else :src="'../../../../storage/images/'+product.image2" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>

                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange3"  id="img3" type="file" name="image3" />

                                                       <img :src="url3" v-if="url3" style="width: 100%;" alt="">


                                                       <img v-else :src="'../../../../storage/images/'+product.image3" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>


                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange4" id="img4" type="file" name="image4" />

                                                       <img  :src="url4" v-if="url4" style="width: 100%;" alt="">


                                                       <img v-else :src="'../../../../storage/images/'+product.image4" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>



                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange5"  id="img5" type="file" name="image5" />

                                                       <img :src="url5" v-if="url5" style="width: 100%;" alt="">


                                                       <img v-else :src="'../../../../storage/images/'+product.image5" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>
                                                     <p style="color: red;" v-if="error.image">Atleast one image is required</p>



                                               </div>
                                           </div>


                                       </div>


                                   </div>
                               </div>
                           </div>
                           <!-- end row -->

                           <div class="row mb-4">
                               <div class="col text-end">
                                   <button @submit="" style="margin-top: 2px;" id="save"  class=" btn btn-info"> <i style="margin-bottom: 1px;" data-feather='save'></i>

                                <span class="add-to-cart"></span>   Update

                                    </button>
                               </div> <!-- end col -->
                           </div> <!-- end row-->


                       </div> <!-- container-fluid -->
   </form>
                   </div>
                   <!-- End Page-content -->



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
        Item:{},
   error:{},
   pid:this.product_id,
       //Url's Used For Image Preview
       url1:'',
       url2:null,
       url3:null,
       url4:null,
       url5:null,
       sub:false,

   'product':{
           'title':'',
           'brand':'',
           'dCharges':'',
           'category':'',
           'discription':'',
           'image':'',
           'image2':'',
           'image3':'',
           'image4':'',
           'image5':'',
        },

   }
   },

   methods:{
       onFileChange(e){
   this.product.image = e.target.files[0];
   this.url1=URL.createObjectURL(this.product.image);
   },

   onFileChange2(e){
       this.product.image2 = e.target.files[0];
   this.url2=URL.createObjectURL(this.product.image2);
   },

   onFileChange3(e){
   this.product.image3 = e.target.files[0];
   this.url3=URL.createObjectURL(this.product.image3);
   },
   onFileChange4(e){
       this.product.image4 = e.target.files[0];
   this.url4=URL.createObjectURL(this.product.image4);
   },
   onFileChange5(e){
       this.product.image5 = e.target.files[0];
   this.url5=URL.createObjectURL(this.product.image5);
   },

getItem(){
    axios.get('/getEditItem/'+this.pid).then(res=>{
this.Item=res.data;
this.product.title=res.data.title;
this.product.brand=res.data.brand;
this.product.dCharges=res.data.dCharges;
this.product.price=res.data.price;
this.product.category=res.data.category;
this.product.discription=res.data.discription;
this.product.image=res.data.image;
this.product.image2=res.data.image2;
this.product.image3=res.data.image3;
this.product.image4=res.data.image4;
this.product.image5=res.data.image5;

console.log(this.Item);
    }).catch(error=>{
        console.log(error);
    })
},


update(){

    let formData = new FormData();

formData.append("title", this.product.title);
formData.append("brand", this.product.brand);
formData.append("dCharges", this.product.dCharges);
formData.append("price", this.product.price);
formData.append("category", this.product.category);
formData.append("discription", this.product.discription);
formData.append("image", this.product.image);
formData.append("image2", this.product.image2);
formData.append("image3", this.product.image3);
formData.append("image4", this.product.image4);
formData.append("image5", this.product.image5);

axios.post('/updateAllProduct/'+this.pid,formData).then(res=>{
    toastr['success']('', 'Product Updated! ', {
      closeButton: true,
      tapToDismiss: false,
    });
}).catch(error=>{
    console.log(error);
})

}
   },



        mounted() {
            console.log('Component mounted.');
            this.getItem();
        }
    }
</script>
