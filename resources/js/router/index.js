import {createRouter, createWebHistory} from 'vue-router'
import posts from "../components/posts/posts.vue"
import notFound from "../components/notFound.vue"
import login from '../components/auth/login.vue'
import register from '../components/auth/register.vue'
const routes = [
    {
        path: '/',
        component: posts
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    },
    {
        path: '/signIn',
        component: login
    },
    {
        path: '/signUp',
        component: register
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
