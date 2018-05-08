import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 // 1. Define some const to be used as template for each path
 let Circle =  require('./components/test/Circle.vue');
 let Rectangle =  require('./components/test/Rectangle.vue');
 let Triangle =  require('./components/test/Triangle.vue');

 // 2. Define some routes
 const routes = [
   	{ path: '/circle', component: Circle },
    { path: '/rectangle', component: Rectangle },
    { path: '/triangle', component: Triangle },
 ];

 // 3. Create the router instance and pass the `routes` option
 const router = new VueRouter({
   // mode: 'history',
   // base: '/dashboard',
   routes // short for `routes: routes`
 })

 const app = new Vue({
     router
 }).$mount('#app');
