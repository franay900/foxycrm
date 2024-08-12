<script >
    export default {
        name: 'Show',

        data(){
            return {
                user: null
            }
        },



        mounted() {
            this.$store.dispatch('getUser', this.$route.params.id)
        },

        computed: {
            user() {
                return this.$store.getters.user
            }
        }
    }
</script>

<template>
    <div v-if="user">
        <div>
            Имя: {{ user.name }}
        </div>

        <div>
            Фамилия: {{ user.surname }}
        </div>

        <router-link :to="{ name: 'user.edit', params: {id: user.id} }">Редактировать</router-link>
    </div>
</template>

<style scoped>

</style>
