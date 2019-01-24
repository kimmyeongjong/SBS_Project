import Vue from 'vue';
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios';
import axios from 'axios';
import BootstrapVue from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

// import Main from '../../components/main/main.vue';

import Main from './components/main/main.vue';
import Login from './components/user/Login.vue';
import JoinUs from './components/user/JoinUs.vue';
import University from './components/board/UniversityBoard.vue';

require('./bootstrap');

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);


export const router = new VueRouter({
    mode : 'history',
    routes : [{
        path: '/', component: Main,
    },{
        path: '/login', component: Login
    },{
        path:'/joinus',component: JoinUs
    },{
        path:'/university',component: University
    },{
        path:'/university/:university_num',component: University
    },]
});


export default router;
