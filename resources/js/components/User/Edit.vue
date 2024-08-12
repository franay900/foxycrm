<script >


import router from "../../router.js";

export default {
    name: 'Edit',



    methods: {


    },

    mounted() {

        this.$store.dispatch('getUser', this.$route.params.id);
    },

    computed: {
        user() {
            return this.$store.getters.user
        },

        isDisabled(){
            return this.user.name && this.user.surname
        }
    }

}
</script>

<template>
    <div v-if="user">
        <div>
            <input type="text" class="form-control" placeholder="Фамилия" v-model="user.surname">
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Имя" v-model="user.name">
        </div>
        <div class="mt-3">
            <button  :disabled="!isDisabled" class="btn btn-primary" @click.prevent="$store.dispatch('updateUser', {id: user.id,name: user.name, surname: user.surname})">Обновить</button>
        </div>



    </div>
</template>

<style scoped>

</style>
