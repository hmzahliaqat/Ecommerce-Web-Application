<template>


<KeepAlive>
    <a @click="remove()" v-show="wishlistItem.length" href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                <i data-feather="heart" class="text-danger"></i>
                                <span></span>
                            </a>
                                    </KeepAlive>
                                    <KeepAlive>
                                        <a @click="create()" v-show="!wishlistItem.length" href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                <i data-feather="heart" class=""></i>
                                <span></span>
                            </a>
                                        </KeepAlive>

</template>

<script>
import axios from 'axios';

    export default {

props:[
    'product_id',
    'user',
    ],

data(){
    return{
        Loggedin:this.user,
        wishlistItem:{},
pid:this.product_id,

    }
},

methods:{
    create(){
        if(this.Loggedin!=null)
axios.post('/addToWishlist',{'product_id':this.pid}).then(res=>{
    this.fetch();
    toastr['success']('', 'Added to wishlist ❤️', {
          closeButton: true,
          tapToDismiss: false,
        });

}).catch(error=>{
    console.log('error')
});
else{
    toastr['error']('', 'Login to add product into wishlist ', {
      closeButton: true,
      tapToDismiss: false,

    });
}


        },

        fetch(){
            axios.get('/isinwishlist/'+this.pid).then(res=>{
               this.wishlistItem=res.data;


            }).catch(error=>{
                console.log(error);
            })
        },

        remove(){
if(this.Loggedin!=null){
            axios.post('/removeWishlistItem',{'product_id':this.pid}).then(res=>{
                this.fetch();
                toastr['error']('', 'Removed Item 🗑️', {
      closeButton: true,
      tapToDismiss: false,

    });

            }).catch(error=>{
                console.log(error);
            })
        }
        },


},

        mounted() {
            console.log('Component mounted.')
this.fetch();


        }
    }
</script>
