// --------- 1 -----------
import Vue from 'vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import VModal from 'vue-js-modal';
import BootstrapVue from 'bootstrap-vue';
import {store} from './index.js';
import Vuex from 'vuex';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import Routes from './routes.js';

import App from './app.vue';

// import Vuetify from 'vuetify';
// import 'vuetify/dist/vuetify.min.css';

// Vue.use(Vuetify);


// routes
Vue.use(VModal);
Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(Vuex);

export const EventBus = new Vue();

// import App from './app.vue';
// import Main from './components/main/main.vue';
// import Login from './components/user/Login.vue';
// import JoinUs from './components/user/JoinUs.vue';
// import 옆의 변수가 라우터에서 component로 쓰이는 변수
// 옆의 from 주소값은 어떤 vue 파일을 components로 쓸 것인가
// 주소값은 app.js가 root파일로 상대경로
// require('./bootstrap');

Vue.component('navs', require('./components/particle/Nav.vue').default);

// window.Vue = require('vue');

// export const routes = [{
//         path: '/', component: Main
//     },{
//         path: '/login', component: Login
//     },{
//         path:'/joinus',component: JoinUs
//     }
// ];


// const router = new VueRouter({ mode: 'history', routes });
// new Vue(Vue.util.extend({ router }, App)).$mount('#app');

const app = new Vue({
    // Router,
    el: '#app',
    router: Routes,
    store,
    render: h => h(App),
});

export default app;
