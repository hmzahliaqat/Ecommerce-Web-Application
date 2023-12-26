@include('pages.header.navbar')
<template>
 <!-- BEGIN: Content-->
    <div class="app-content content chat-application">

        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper container-xxl p-0">
            <div class="sidebar-left">
                <div class="sidebar">

                    <!--/ Admin user profile area -->

                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content">
                        <span class="sidebar-close-icon">
                            <i data-feather="x"></i>
                        </span>
                        <!-- Sidebar header start -->
                        <div class="chat-fixed-search">
                            <div class="d-flex align-items-center w-100">
                                <div class="sidebar-profile-toggle">
                                    <div class="avatar avatar-border">
                                        <img src="../../../../../public/storage/images/user-01.jpg" alt="user_avatar" height="42" width="42" />
                                        <span class="avatar-status-online"></span>
                                    </div>
                                </div>
                                <div class="input-group input-group-merge ml-1 w-100">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text round"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control round" id="chat-search" placeholder="Search or start a new chat" aria-label="Search..." aria-describedby="chat-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar header end -->

                        <!-- Sidebar Users start -->
                        <div id="users-list" class="chat-user-list-wrapper list-group">
                            <h4 class="chat-list-title">Chats</h4>
                            <ul class="chat-users-list chat-list media-list">

                                <!-- <li v-if="rec.length!=0" @click.prevent="getIns(this.rec.id)">
                                    <span class="avatar"><img src="../../../../../public/images/portrait/small/avatar-s-15.jpg" height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-offline"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">{{ this.rec.name }}</h5>
                                        <p class="card-text text-truncate">
                                            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-right mb-25 chat-time">4:14 PM</small>
                                        <span class="badge badge-danger badge-pill float-right">3</span>
                                    </div>
                                </li> -->



                                <KeepAlive>
                                <li v-for="items in users" @click.prevent="getIns(items.id)">
                                    <span class="avatar"><img :src="'../../../../../storage/images/'+ items.img" height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-away"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">{{ items.name }}</h5>
                                        <p class="card-text text-truncate">
                                            Tap to start Conversation
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <!-- <small class="float-right mb-25 chat-time">5:48 PM</small> -->
                                    </div>
                                </li>
                            </KeepAlive>


                                <li class="no-results">
                                    <h6 class="mb-0">No Chats Found</h6>
                                </li>
                            </ul>

                        </div>
                        <!-- Sidebar Users end -->
                    </div>
                    <!--/ Chat Sidebar area -->

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <!-- Main chat area -->
                        <section class="chat-app-window">
                            <!-- To load Conversation -->
                            <div v-show="noChat" class="start-chat-area">
                                <div class="mb-1 start-chat-icon">
                                    <i data-feather="message-square"></i>
                                </div>
                                <h4 class="sidebar-toggle start-chat-text">Start Conversation</h4>
                            </div>
                            <!--/ To load Conversation -->

                            <!-- Active Chat -->
                            <div class="active-chat" v-show="!noChat">
                                <!-- Chat Header -->
                                <div class="chat-navbar overflow-auto">
                                    <header class="chat-header">
                                        <div class="d-flex align-items-center">
                                            <div class="sidebar-toggle d-block d-lg-none mr-1">
                                                <i data-feather="menu" class="font-medium-5"></i>
                                            </div>
                                            <div class="avatar avatar-border user-profile-toggle m-0 mr-1">
                                                <img src="../../../../../public/storage/images/user-13.jpg" alt="avatar" height="36" width="36" />
                                                <span class="avatar-status-busy"></span>
                                            </div>
                                            <h6 v-if="nm" class="mb-0">{{ this.secondPerson.name }}</h6>
                                            <h6 v-else class="mb-0">ff</h6>

                                        </div>
                                        <div class="d-flex align-items-center">
                                            <!-- <i data-feather="phone-call" class="cursor-pointer d-sm-block d-none font-medium-2 mr-1"></i>
                                            <i data-feather="video" class="cursor-pointer d-sm-block d-none font-medium-2 mr-1"></i>
                                            <i data-feather="search" class="cursor-pointer d-sm-block d-none font-medium-2"></i> -->
                                            <div class="dropdown">
                                                <button class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="more-vertical" id="chat-header-actions" class="font-medium-2"></i>
                                                </button>
                                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="chat-header-actions">
                                                    <a class="dropdown-item" href="javascript:void(0);">View Contact</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Report</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </header>
                                </div>
                                <!--/ Chat Header -->

                                <!-- User Chat messages -->
                                <div  style="overflow: auto" id="ov" class="user-chats">
                                    <div  v-for="items in messages "  class="chats">
                                        <div class="chat" v-show="items.sender_id==authUser" >

                                            <div>
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img :src="'../../../../../storage/images/'+ secondPerson.img" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>{{ items.message }}</p>
                                                </div>
                                            </div>

                                        </div>
                                        </div>



                                        <!-- <div class="divider">
                                            <div class="divider-text">Yesterday</div>
                                        </div> -->



                                        <div v-show="items.sender_id==secondPersonId"  class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../../../public/images/0.png" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>{{ items.message }}</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>




                                </div>



                                <!-- User Chat messages -->

                                <!-- Submit Chat form -->
                                <form class="chat-app-form"  >
                                    <div class="input-group input-group-merge mr-1 form-send-message">
                                        <!-- <div class="input-group-prepend">
                                            <span class="speech-to-text input-group-text"><i data-feather="mic" class="cursor-pointer"></i></span>
                                        </div> -->
                                        <input type="text" v-model="content.message" name="message" class="form-control message" placeholder="Type your message..." />
                                        <div class="input-group-append">
                                            <!-- <span class="input-group-text">
                                                <label for="attach-doc" class="attachment-icon mb-0">
                                                    <i data-feather="image" class="cursor-pointer lighten-2 text-secondary"></i>
                                                    <input type="file" id="attach-doc" hidden /> </label></span> -->
                                        </div>
                                    </div>
                                    <button @click.prevent="sendChat(secondPersonId)" type="button" class="btn btn-primary send" >
                                        <i data-feather="send" class="d-lg-none"></i>
                                        <span class="d-none d-lg-block">Send</span>
                                    </button>
                                </form>
                                <!--/ Submit Chat form -->
                            </div>
                            <!--/ Active Chat -->
                        </section>
                        <!--/ Main chat area -->

                        <!-- User Chat profile right area -->
                        <div class="user-profile-sidebar">
                            <header class="user-profile-header">
                                <span class="close-icon">
                                    <i data-feather="x"></i>
                                </span>
                                <!-- User Profile image with name -->
                                <div class="header-profile-sidebar">
                                    <div class="avatar box-shadow-1 avatar-border avatar-xl">
                                        <img src="../../../../../public/images/portrait/small/avatar-s-1.jpg" alt="user_avatar" height="70" width="70" />
                                        <span class="avatar-status-busy avatar-status-lg"></span>
                                    </div>
                                    <h4 class="chat-user-name">Kristopher Candy</h4>
                                    <span class="user-post">UI/UX Designer 👩🏻‍💻</span>
                                </div>
                                <!--/ User Profile image with name -->
                            </header>
                            <div class="user-profile-sidebar-area">
                                <!-- About User -->
                                <h6 class="section-label mb-1">About</h6>
                                <p>Toffee caramels jelly-o tart gummi bears cake I love ice cream lollipop.</p>
                                <!-- About User -->
                                <!-- User's personal information -->
                                <div class="personal-info">
                                    <h6 class="section-label mb-1 mt-3">Personal Information</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <i data-feather="mail" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">kristycandy@email.com</span>
                                        </li>
                                        <li class="mb-1">
                                            <i data-feather="phone-call" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">+1(123) 456 - 7890</span>
                                        </li>
                                        <li>
                                            <i data-feather="clock" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Mon - Fri 10AM - 8PM</span>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ User's personal information -->

                                <!-- User's Links -->
                                <div class="more-options">
                                    <h6 class="section-label mb-1 mt-3">Options</h6>
                                    <ul class="list-unstyled">
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="tag" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Add Tag</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="star" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Important Contact</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="image" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Shared Media</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="trash" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Delete Contact</span>
                                        </li>
                                        <li class="cursor-pointer">
                                            <i data-feather="slash" class="font-medium-2 mr-50"></i>
                                            <span class="align-middle">Block Contact</span>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ User's Links -->
                            </div>
                        </div>
                        <!--/ User Chat profile right area -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


</template>

<script>
import axios from 'axios';

    export default {

props:[
    'rec',
],


data(){
    return{
nm:false,
        noChat:true,
        secondPerson:null,
        secondPersonId:null,
        reciever:this.rec,
        messages:{},
        users:{},
        authUser:null,
        authImg:null,

    'content':{
        'message':'',
    },




    }
},


methods:{

getIns(id){

    // console.log(id);
  axios.get('/getIns/'+id).then(res=>{
        this.secondPerson=res.data;
        this.secondPersonId=res.data.id;
        this.noChat=false;
        this.nm=true;
this.getChat();
    }).catch(error=>{
        console.log(error);
    })
},





sendChat(id){

    this.messages.push({
    "message":    this.content.message,

    });


    axios.post('/sendChat/'+id,this.content).then(res=>{

    }).catch(error=>{
        console.log(error);
    })
    this.content.message='';
},


getChat(){
    axios.get('/getChat/'+this.secondPersonId).then(res=>{
this.messages=res.data;
// this.messages.forEach(element => {
// this.messages.push(element.message);

// });

console.log(this.messages);
    }).catch(error=>{
        console.log(error);
    })
},




getUsers(){
    axios.get('/getUsers').then(res=>{

        this.users=res.data;
    }).catch(error=>{
        console.log(error);
    })
},






getAuthUser(){
axios.get('/getAuthUser').then(res=>{
    this.authUser=res.data.id;
    console.log(this.authUser);
}).catch(error=>{
    console.log(error);
})
},


},

getImgauth(){

    axios.get('/getimageauth').then(res=>{
        this.authImg=res.data;

    }).catch(error=>{
        console.log(error);
    })

},


        mounted() {
            console.log(this.reciever);
            this.getUsers();
            this.getAuthUser();


           Echo.private(`chat`)
    .listen('chatEvent', (e) => {

this.messages.push(
    e.message,
);
        console.log(e);
    });

        }
    }
</script>
