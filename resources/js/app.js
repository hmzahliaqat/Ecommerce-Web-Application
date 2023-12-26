/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import Addproduct from './components/pages/Addproduct.vue';
import Dashboard from './components/pages/Dashboard.vue';
import Addtocart from './components/pages/Addtocart.vue';
import Wishlist from './components/pages/Wishlist.vue';
import Checkout from './components/pages/Checkout.vue';
import Checkoutcart from './components/pages/cart/Checkoutcart.vue';
import Becomeseller from './components/pages/seller/Becomeseller.vue';
import Shop from './components/pages/Shop.vue';
import Cartdropdown from './components/pages/Cartdropdown.vue';


//chat
import Chat from './components/pages/chat/Chat.vue';
//comments & Rating
import Comments from './components/pages/commentsAndRatings/Comments.vue';

//Dashboaed edit/delete
import Editdelete from './components/pages/Editdelete.vue';
import Editproduct from './components/pages/Editproduct.vue';
import ShowOrderdetails from './components/pages/ShowOrderdetails.vue';
import Allproductsection from './components/pages/Allproductsection.vue';

//Search
import Search from './components/pages/Search.vue';







app.component('example-component', ExampleComponent);
app.component('addproduct', Addproduct);
app.component('Sdboard', Dashboard);
app.component('cart', Addtocart);
app.component('wish', Wishlist);
app.component('cart-checkout', Checkoutcart);
app.component('checkout', Checkout);
app.component('becsel', Becomeseller);
app.component('shop-component', Shop);
app.component('search', Search);


//chat
app.component('chat-component', Chat);
//comment & rating
app.component('comment-component', Comments);

//Dashboaed edit/delete
app.component('modify-component', Editdelete);
app.component('edit-product', Editproduct);
app.component('showdetails', ShowOrderdetails);
app.component('allproducts', Allproductsection);
app.component('cartdrop',Cartdropdown);













/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
