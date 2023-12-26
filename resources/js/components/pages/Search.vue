<template>

<section id="ecommerce-searchbar" class="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <input type="text" v-model="searchQuery" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul v-show="results.length > 0 && searchQuery!=''"  v-for="(result,index) in results" class="bg-white w-full border-2 p-2 ">
<!-- <h1>there is something!</h1> -->
<a :href="'/productdetail/'+result.id"><div @click="selectedItem(result.id)">

    <div  class="d-flex align-items-center cursor-pointer">

    <div class="avatar rounded">
                 <div class="avatar-content">
          <img class="" :src="'../../../../storage/images/' + result.image" alt="" />
                            </div>
                </div>

<p class="px-2 font-bold">    {{ result.title }} </p>

</div>
</div></a>

                    </ul>

                </section>




</template>

<script>
import axios from 'axios';

    export default {

        data(){
            return{
                searchQuery:null,
                results:[],
            }

        },

        methods:{

            getResults(){

                axios.get('/search/'+this.searchQuery).then(res=>{
                    this.results=res.data;
                }).catch(error=>{
                    console.log(error);
                })

            },




        },

        watch:{
            searchQuery(after,before){
                this.getResults();
            }

        },



        mounted() {
            console.log('Search Component mounted.')
        }
    }
</script>
