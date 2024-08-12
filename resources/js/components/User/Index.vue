<script >
    export default {
        name: 'Index',

        data() {
            return {
                users: null
            }
        },
        methods: {


        },
        mounted() {
            this.$store.dispatch('getUsers')
        },
        computed: {
            users() {
                return this.$store.getters.users;
            }
        }

    }
</script>

<template>
    <table class="table table-bordered w-75">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users">
            <th scope="row">{{ user.id }}</th>
            <td>{{ user.name }}</td>
            <td>{{ user.surname }}</td>
            <td>
                <router-link class="btn btn-outline-primary" :to="{ name: 'user.edit', params: {id: user.id} }">Редактировать</router-link>
            </td>
            <td>
                <a @click.prevent="$store.dispatch('deleteUser', user.id)"  href="" class="btn btn-outline-danger">Удалить</a>
            </td>
        </tr>

        </tbody>
    </table>
    <router-link class="btn btn-outline-primary" :to="{ name: 'user.create' }">Добавить</router-link>
</template>

<style scoped>

</style>
