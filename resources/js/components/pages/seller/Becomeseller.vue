<template>
 <section id="main" class="vertical-wizard mt-4 shadow-5xl xl:container mx-auto overflow-none">

                    <div class="bs-stepper vertical vertical-wizard-example py-36">

                        <div class="bs-stepper-header">
                            <a href="/" class="btn btn-danger ">
                                <i data-feather="arrow-left" class="align-middle ml-sm-25 ml-0"></i>

                                        <span class="align-middle d-sm-inline-block d-none">Back</span>
                                    </a>
                            <div class="step" data-target="#account-details-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Account Details</span>
                                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Store Address</span>
                                        <span class="bs-stepper-subtitle">Add Address Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Bank Details</span>
                                        <span class="bs-stepper-subtitle">Add Bank Details</span>
                                    </span>
                                </button>
                            </div>

                        </div>
                        <div class="bs-stepper-content">

                            <div id="account-details-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Account Details</h5>
                                    <small class="text-muted">Enter Your Account Details.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-username">Store Name</label>
                                        <input type="text" v-model="data.name" name="name" id="vertical-username" class="form-control" placeholder="Enter Store Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-email">Email</label>
                                        <input type="email" id="vertical-email" v-model="data.email" name="email" class="form-control" placeholder="Enter Email" aria-label="john.doe" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="vertical-password">Phone Number</label>
                                        <input type="number" v-model="data.ph" name="ph" id="vertical-password" class="form-control" placeholder="1234567" />
                                    </div>
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="vertical-password">Cnic</label>
                                        <input type="number" id="" v-model="data.cnic" name="cnic" class="form-control" placeholder="XXXXX-XXXXXXX-X" />
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-info-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Store Address</h5>
                                    <small>Enter Your store address.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-first-name">Country</label>
                                        <input type="text" v-model="data.country" id="vertical-first-name" class="form-control"  disabled />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="">State</label>
                                        <select v-model="data.state" name="state" class=" w-100" id="">
                                            <option label=" "></option>
                                            <option value="Azad Kashmir">Azad Kashmir</option>
                                            <option value="Balochistan">Balochistan</option>
                                            <option value="FATA">Federally Administered Tribal Areas</option>
                                            <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Khyber Pakhtunkhw">Khyber Pakhtunkhwa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Sindh">Sindh</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="vertical-language">Address</label>
                                        <p class="text-info">Please enter the full address(include house floor/unit number/shop name, street & road) For example, House number 23A, Street No. 4, Model Town, Lahore.</p>
                                        <textarea v-model="data.address" name="address" type="text" id="vertical-first-name" class="form-control" ></textarea>


                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Bank Details</h5>
                                    <small>Enter Your Bank Details.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-address">Account Holder Name</label>
                                        <input type="text" id="vertical-address" v-model="data.accHolderName" name="accHolderName" class="form-control" placeholder="Enter Full Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-landmark">Account Number</label>
                                        <input type="number" v-model="data.accNumber" name="accNumber" id="vertical-landmark" class="form-control credit-card-mask" placeholder="eg.1111111111" />
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-country">Bank Name</label>
                                        <select class="w-100" v-model="data.bankName" name="bankName" id="">
                                            <option label=" "></option>
                                            <option value="AL BARAKA BANK LIMITED">AL BARAKA BANK LIMITED</option>
                                            <option value="ALLIED BANK LIMITED">ALLIED BANK LIMITED</option>
                                            <option value="ASKARI BANK LIMITED">ASKARI BANK LIMITED</option>
                                            <option value="BANK AL FALAH  LIMITED">BANK AL FALAH  LIMITED</option>
                                            <option value="BANK AL HABIB LIMITED">BANK AL HABIB LIMITED</option>
                                            <option value="BANK ISLAMI LIMITED">BANK ISLAMI LIMITED</option>
                                            <option value="BURJ BANK">BURJ BANK</option>
                                            <option value="DUBAI ISLAMIC BANK PAKISTAN LIMITED">DUBAI ISLAMIC BANK PAKISTAN LIMITED</option>
                                            <option value="FAISAL BANK LIMITED">FAISAL BANK LIMITED</option>
                                            <option value="HABIB BANK LIMITED">HABIB BANK LIMITED</option>
                                            <option value="HABIB METROPOLITICAN BANK">HABIB METROPOLITICAN BANK</option>
                                            <option value="JS BANK LIMITED">JS BANK LIMITED</option>
                                            <option value="MCB BANK LIMITED">MCB BANK LIMITED</option>
                                            <option value="MCB ISLAMIC BANK LIMITE">MCB ISLAMIC BANK LIMITED</option>
                                            <option value="MEEZAN BANK LIMITED">MEEZAN BANK LIMITED</option>
                                            <option value="MOBLINK MICROFINANCE BANK PVT LTD">MOBLINK MICROFINANCE BANK PVT LTD</option>
                                            <option value="MUSLIM COMMERICAL BANK LIMITED">MUSLIM COMMERICAL BANK LIMITED</option>
                                            <option value="NATIONAL BANK OF PAKISTAN">NATIONAL BANK OF PAKISTAN</option>
                                            <option value="NAYA PAY">NAYA PAY</option>
                                            <option value="SADA PAY">SADA PAY</option>
                                            <option value="SAMBA BANK">SAMBA BANK</option>
                                            <option value="SILK BANK LIMITED">SILK BANK LIMITED</option>
                                            <option value="SINDH BANK">SINDH BANK</option>
                                            <option value="SONERI BANK LIMITED">SONERI BANK LIMITED</option>
                                            <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                                            <option value="SUMMIT BANK LTD">SUMMIT BANK LTD</option>
                                            <option value="TAMEER BANK">TAMEER BANK</option>
                                            <option value="TELENOR MICROFINANCE BANK">TELENOR MICROFINANCE BANK</option>
                                            <option value="Testglj">Testglj</option>
                                            <option value="THE BANK OF PUNJAB">THE BANK OF PUNJAB</option>
                                            <option value="UNITED BANK LIMITED">UNITED BANK LIMITED</option>
                                            <option value="WorldFirst">WorldFirst</option>
                                        </select>
                                    </div>






                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button type="submit" @click.prevent="store()" class="btn btn-success btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links-vertical" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-twitter">Twitter</label>
                                        <input type="text" id="vertical-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-facebook">Facebook</label>
                                        <input type="text" id="vertical-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-google">Google+</label>
                                        <input type="text" id="vertical-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-linkedin">Linkedin</label>
                                        <input type="text" id="vertical-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button  class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Vertical Wizard -->


                <!-- /Modern Vertical Wizard -->

</template>

<script>
    export default {

    data(){
        return{

            info:{},

            'data':{
                'name':'',
                'email':'',
                'ph':'',
                'cnic':'',
                'country':'Pakistan',
                'state':'',
                'accHolderName':'',
                'accNumber':'',
                'bankName':'',
                'address':'',
            },



        }
    },
    methods:{


        getInfo(){

            axios.get('userInfo').then(res=>{
                this.info=res.data;
                this.data.email=res.data.email;
           }).catch(error=>{
                console.log(error);

            })
        },

        store(){
            axios.post('/storeSellerInfo',this.data).then(res=>{
                toastr['success']('', 'info submitted 🛒',{
closeButton: true,
       tapToDismiss: false,
    });

            }).catch(error=>{
                console.log(error);
            })

            this.data={
                'name':'',
                'email':'',
                'ph':'',
                'cnic':'',
                'country':'',
                'state':'',
                'accHoldername':'',
                'accNumber':'',
                'bankName':'',
                'address':'',

            }
        },


    },





        mounted() {
            console.log('Component mounted.');
            this.getInfo();
        }
    }
</script>
