<template>

    <router-link :to="{ name: 'user.index' }">Все пользователи</router-link>

    <router-view></router-view>


</template>

<script>

    import router from "../router.js";

    export default {
        name: 'Index',


    }


</script>
