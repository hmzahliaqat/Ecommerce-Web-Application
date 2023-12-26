<template>

<section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
    <div class="max-w-2xl md:max-w-full mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion </h2>
      </div>
      <form class="mb-6">
          <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
              <label for="comment" class="sr-only">Your comment</label>
              <textarea v-model="commentData.body"  rows="6" name="body"
                  class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                  placeholder="Write a comment..." required></textarea>


                  <!-- <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange"   id="img1" type="file" name="image1" />

                                                      <img :src="url1" v-if="url1" style="width: 100%;" alt="">

                                                       <img v-else src="../../../../../public/images/custom/add-image.png" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>
                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange2"   id="img2" type="file" name="image2" />

                                                      <img :src="url2" v-if="url2" style="width: 100%;" alt="">

                                                       <img v-else src="../../../../../public/images/custom/add-image.png" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>
                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange3"   id="img3" type="file" name="image3" />

                                                      <img :src="url3" v-if="url3" style="width: 100%;" alt="">

                                                       <img v-else src="../../../../../public/images/custom/add-image.png" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>
                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange4"   id="img1" type="file" name="image4" />

                                                      <img :src="url4" v-if="url4" style="width: 100%;" alt="">

                                                       <img v-else src="../../../../../public/images/custom/add-image.png" style="width: 100%;" alt="">

                                                     </button>
                                                     </div>
                                                     <div style="margin-left: 5px;" class="upload-btn-wrapper">
                                                       <button class="btns">
                                                       <input v-on:change="onFileChange5"   id="img1" type="file" name="image" />

                                                      <img :src="url5" v-if="url5" style="width: 100%;" alt="">

                                                       <img v-else src="../../../../../public/images/custom/add-image.png" style="width: 100%;" alt="">

                                                     </button>
                                                     </div> -->

<!--

                   <div class="p-4 border-top">
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input  name="file" type="file" multiple="multiple">
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                                        </div>

                                                        <h4 >Drop files here or click to upload.</h4>
                                                    </div>
                                                </form>
                                            </div> -->








                                                </div>

          <button v-show="authUser!=null" type="submit" @click.prevent="create()"
              class="inline-flex  btn-primary items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Post comment
          </button>
          <p v-show="authUser==null">You must login to post comment </p>


      </form>


    <div  v-for="items in comments" >

      <article v-if="comments.length" class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
          <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                  <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                          class="mr-2 w-6 h-6 rounded-full"
                          src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                          alt="Michael Gough">

                        <!-- <p v-if="comments.user_id==authUser">You</p> -->
                        <p v-if="items.user_id==authUser.id">You</p>
                        <p v-else>{{ items.name }}</p>


                        </p>
                  <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                          title="February 8th, 2022"> {{ moment(items.created_at).format("DD-MM-YYYY") }}</time></p>
              </div>
              <div id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                  type="button">



                  <span class="sr-only">Comment settings</span>
              </div>

              <!-- Dropdown menu -->
               <!-- <div id="dropdownComment1"
                  class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                      aria-labelledby="dropdownMenuIconHorizontalButton">
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                      </li>
                  </ul>
              </div>  -->
          </footer>
          <p class="text-gray-500 dark:text-gray-400">{{ items.body }}</p>
          <div class="flex items-center mt-2 space-x-4">

              <button type="submit" @click.prevent="rep(items.id)"
                  class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                  <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                  </svg>
                  Reply
              </button>


              <!-- <p class="">11   <i data-feather='thumbs-up' class="text-green-500 -mt-1.5 font-bold"></i></p>
              &nbsp;
              &nbsp;

              <p>  <i data-feather='thumbs-down' class="text-danger font-bold"></i>  2</p> -->

          </div>

          <!-- reply input -->
          <div v-if="replyActive==items.id" class="relative flex w-full flex-wrap items-stretch  rounded-full ">
  <input type="text" v-model="replyData.body" name="body" placeholder="Placeholder" class="px-5 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full pr-10"/>
  <button type="submit"  @click.prevent="createReply(items.id)" class="z-10 h-full leading-snug font-bold absolute text-center text-teal-500 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-1">
      <p class="">Post</p>
  </button>
</div>
      </article>


      <article  v-if="rep.length"  v-for="rep in replies" v-show="items.id==rep.comment_id" class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
          <footer class="flex justify-between items-center mb-2">
              <div class="flex items-center">
                <p v-if="rep.user_id==authUser" class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                          class="mr-2 w-6 h-6 rounded-full"
                          src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                          alt="Jese Leos">You</p>
                  <p v-else class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                          class="mr-2 w-6 h-6 rounded-full"
                          src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                          alt="Jese Leos">{{ rep.user_name }}</p>
                  <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                          title="February 12th, 2022"> {{ moment(rep.created_at).format("DD-MM-YYYY") }}</time></p>
              </div>
              <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                  type="button">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                      <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                  </svg>
                  <span class="sr-only">Comment settings</span>
              </button>

              <div id="dropdownComment2"
                  class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                      aria-labelledby="dropdownMenuIconHorizontalButton">
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                      </li>
                      <li>
                          <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                      </li>
                  </ul>
              </div>
          </footer>
          <p class="text-gray-500 dark:text-gray-400">{{ rep.body }}</p>
          <div class="flex items-center mt-4 space-x-4">

              <button type="submit" @click.prevent="reply2(rep.id)"
                  class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                  <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                  </svg>
                  Reply
              </button>



          </div>
          <div v-show="reply2Active==rep.id" class="relative flex w-full flex-wrap items-stretch mt-1 rounded-full ">
  <input type="text" v-model="replyData.body" name="body" placeholder="Placeholder" class="px-5 py-1 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full pr-10"/>
  <button type="submit" @click.prevent="createReply(items.id)" class="z-10 h-full leading-snug font-bold absolute text-center text-teal-500 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-1">
      <p class="">Post</p>
  </button>
</div>
      </article>

    </div>
    </div>
  </section>


</template>

<script>
import moment from "moment";
    export default {

        props:[
            'product_id',  //Product Id
            'user',
        ],

        data(){
            return{

                'commentData':{
                    'body':'',
                    // pics:[
                    //     {
                    //         'image1':'',
                    //         'image2':'',
                    //         'image3':'',
                    //         'image4':'',
                    //         'image5':'',

                    //     }
                    // ],

                },
                'replyData':{
                    'body':'',
                },

                loggedIn:this.user,
                moment: moment,
                 pId:this.product_id,
                replyActive:null,
                reply2Active:null,
                comments:{},
                replies:{},
                authUser:{},
                count:1,
                imageUrl:'',
                imagePreview:false,
                imageList:[],
                url1:null,
                url2:null,
                url3:null,
                url4:null,
                url5:null,
            }
        },


        methods:{

// onFileChange(e){

//     this.commentData.pics.image1 = e.target.files[0];
//    this.url1=URL.createObjectURL(this.commentData.pics.image1);
// },
// onFileChange2(e){

// this.commentData.pics.image2 = e.target.files[0];
// this.url2=URL.createObjectURL(this.commentData.pics.image2);
// },
// onFileChange3(e){

// this.commentData.pics.image3 = e.target.files[0];
// this.url3=URL.createObjectURL(this.commentData.pics.image3);
// },
// onFileChange4(e){

// this.commentData.pics.image4 = e.target.files[0];
// this.url4=URL.createObjectURL(this.commentData.pics.image4);
// },
// onFileChange5(e){

// this.commentData.pics.image5 = e.target.files[0];
// this.url5=URL.createObjectURL(this.commentData.pics.image5);
// },


            create(){

                let formData = new FormData();
       formData.append("body", this.commentData.body);
    //    formData.append("image1",this.commentData.pics.image1);
    //    formData.append("image2",this.commentData.pics.image2);
    //    formData.append("image3",this.commentData.pics.image3);
    //    formData.append("image4",this.commentData.pics.image4);
    //    formData.append("image5",this.commentData.pics.image5);


if(this.loggedIn!=null){
                axios.post('/sendComment/' + this.pId, formData).then(res => {

                this.comments.push({
                    'body': this.commentData.body,
                    'name': "You"
                });
}).catch(error=>{
 console.log(error);
                })
// this.commentData={
                //     'body':'',
                // }


}else{
    toastr['error']('', 'Login Required',{
closeButton: true,
       tapToDismiss: false,
    });

}


 },


            getComment(){

                axios.get('/getComment/'+this.pId).then(res=>{
                    this.comments=res.data;

                    console.log(this.comments);

                }).catch(error=>{
                    console.log(error);
                })
            },
            //reply function
            rep(id){
this.replyActive=id;

           },
           reply2(id){
this.reply2Active=id;
           },

createReply(id){

this.replies.push({
'body': this.replyData.body,
'user_name':'you',
});
    axios.post('/sendReply/'+id,this.replyData).then(res=>{

    }).catch(error=>{
        console.log(error);
    })

    this.replyData={
        'body':'',
    }


},

getAuthUser(){
axios.get('/getAuthUser').then(res=>{
    this.authUser=res.data;
    console.log(this.authUser.id);
}).catch(error=>{
    console.log(error);
})
},
getReply(){


    axios.get('/getReply/').then(res=>{
this.replies=res.data;
console.log(this.replies);
}).catch(error=>{
    console.log(error);
})

},



//images

handle(e){
console.log(e);
let selectedfile=e.target.files;

if(!selectedfile.length){
    return false;
}
for(let i=0; i<selectedfile.length;i++){
    this.imageList.push([selectedfile[i]]);
}

console.log(this.imageList);
},

plus(){

    this.count++;
}





        },

        mounted() {
            console.log('Component mounted.');
             this.getComment();
             this.getReply();
             this.getAuthUser();


Echo.private('comment')
.listen('commentEvent',(e)=>{

this.comments.push({
    'body':e.comment.body,
    'name':e.user

});


console.log(e);
})

Echo.private('reply')
.listen('replyEvent',(e)=>{

    this.replies.push({
      'body':  e.reply.body,
      'user_name': e.user.name,
      'comment_id':e.reply.comment_id,

    })

console.log(e);
})



    }
    }
</script>
