import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);


const loadLayout = layout => () => import(`../components/layouts/${layout}.vue`)
const loadView = view => () => import(`../views/${view}.vue`)

const routes = [{
        path: '/',
        component: loadLayout("DefaultLayout"),
        children: [{
            path: '',
            component: loadView("Home")
        }, ]

    },

]

const router = new VueRouter({
    routes,
    mode: 'history',
});
export default router
