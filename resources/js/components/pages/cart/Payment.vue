<template>
<div class="md:container mt-5 px-5">



<div class="row">

<div class="col-md-8">


    <div class="card p-3">

        <h6 class="text-uppercase text-primary ">Payment details</h6>
        <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>


        <div class="row">

            <div class="col-md-6">

                <div class="inputbox mt-3 mr-2 "> <input type="text" name="name" class="form-control credit-card-mask" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span>


                </div>


            </div>

            <div class="col-md-6">

                 <div class="d-flex flex-row">


                     <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>

                  <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>


                 </div>


            </div>


        </div>



    </div>


    <div class="mt-4 mb-4 d-flex justify-content-between">





                <button class="btn btn-primary px-3">Pay $840</button>




            </div>

</div>

<div class="col-md-4">

    <div class="card card-blue p-3 text-white mb-3">

       <span>You have to pay</span>
        <div class="d-flex flex-row align-items-end mb-3">
            <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
        </div>

        <span>Enjoy all the products and perk after you complete the payment</span>
        <a href="#" class="yellow decoration">don't forget to browse  other products</a>

        <div class="hightlight">

            <span>100% Guaranteed support and update.</span>


        </div>

    </div>

</div>

</div>


</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
