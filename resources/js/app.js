import { createApp } from 'vue';
import PostComponent from './components/PostComponent.vue';
import './bootstrap';

const app = createApp({
    el: '#app',

    components:{
        'post-component': PostComponent,
    }
});
app.mount('#app');