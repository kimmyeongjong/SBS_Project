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
import AllSBSBoard from './components/board/AllSBSBoard.vue';
import Product from './components/board/Product.vue';
import WriteSBS from './components/board/WriteSBS.vue';

require('./bootstrap');

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);


export const router = new VueRouter({
    mode : 'history',
    routes : [{
        path: '/', component: Main, meta:{ auth: false },
    },{
        path: '/login', component: Login, meta:{ auth: false },
    },{
        path:'/joinus',component: JoinUs, meta:{ auth: false },
    },{
        path:'/university',component: University, meta:{ auth: false },
    },{
        path:'/university/:university_num',component: University, meta:{ auth: false },
    },{
        path: '/allsbs', component: AllSBSBoard, meta:{ auth: false },
    },{
        path: '/allsbs/:product_num', component: Product, meta:{ auth: false },
    },{
        path: '/writesbs', component: WriteSBS, meta:{ auth: false },
    }]
});


export default router;
