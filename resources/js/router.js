import { createRouter, createWebHistory } from 'vue-router';
import Index from "./components/User/Index.vue";
import Show from "./components/User/Show.vue";
import Create from "./components/User/Create.vue";
import Edit from "./components/User/Edit.vue";

const routes = [
    {
        path: '/user',
        name: 'user.index',
        component: Index,
    },
    {
        path: '/user/create',
        name: 'user.create',
        component: Create,
    },
    {
        path: '/user/:id/edit',
        name: 'user.edit',
        component: Edit,
    },
    {
        path: '/user/:id/',
        name: 'user.show',
        component: Show,
    },



];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
