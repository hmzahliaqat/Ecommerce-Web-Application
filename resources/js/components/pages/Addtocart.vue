<template>



<KeepAlive>

   <a @click="addToCart()"  v-show="!iscart.length"  href="javascript:void(0)" class="btn btn-primary  btn-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart"></span>
                            </a>
</KeepAlive>

<KeepAlive>
    <a @click="removefromcart()"  v-show="iscart.length"  href="javascript:void(0)" class="btn btn-primary  btn-cart">
                                <i data-feather="check"></i>
                                <span class="add-to-cart"></span>
                            </a>
</KeepAlive>

</template>

<script>
import axios from 'axios';

    export default {

        props: [
            'product_id',
            'cart',
            'user',
        ],

data(){
    return{
loggedIn:this.user,
toggleCartBtn:true,
iscart:{},
pid:this.product_id,
cartItem:this.cart,
    }
},

methods:{

    addToCart(){


        if(this.loggedIn!=null){

axios.post('/cart',{'product_id':this.pid}).then(res=>{

this.getcart();

    toastr['success']('', 'Added to cart 🛒',{
closeButton: true,
       tapToDismiss: false,
    });
}).catch(error=>{
    console.log(error);
})
        }else{

            toastr['error']('', 'Login to add product into cart ', {
      closeButton: true,
      tapToDismiss: false,

    });
        }

    },

    removefromcart(){


        axios.post('/remove', { 'product_id': this.pid }).then(res => {
                this.getcart();

                    toastr['error']('', 'Removed Item 🗑️', {
                        closeButton: true,
                        tapToDismiss: false,
                    });


            }).catch(error => {
                console.log(error);
            })


        },


getcart(){

axios.get('/isincart/'+this.pid).then(res=>{

    // console.log(res.data);
    this.iscart=res.data;


}).catch(error=>{
    console.log(error);
})

},





},


        mounted() {
            console.log('Component mounted.')
 this.getcart();
// console.log(this.pid);





        }
    }
</script>
