import { createApp } from 'vue';
import store from './store';
import './bootstrap';
import router from './router';
import Index from "./components/Index.vue";

const app = createApp({
    el: '#app',

    components:{
        Index
    },


});


app.use(router);
app.use(store);
app.mount('#app');
