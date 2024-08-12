<template>


    <tr :class="this.$parent.isEdit(user.id) ? ' ' : 'd-none' ">
        <td scope="row">{{ user.id }}</td>
        <td><input type="text" v-model="surname"></td>
        <td><input type="text" v-model="name"></td>
        <td><a href="" class="btn btn-primary" @click.prevent="updateUser(user.id)">Сохранить</a></td>
    </tr>


</template>

<script>
export default {
    name: 'EditComponent',

    props: [
        'user'
    ],
    data() {
        return {
            name: null,
            surname: null
        }
    },
    methods: {

        updateUser(id) {
            this.$parent.editUserId = null;

            axios.patch('/api/users/' + id, {name: this.name, surname: this.surname})
                .then(res => {
                    this.$parent.getUsers();
                })
        },


    },

    mounted() {

    }
}
</script>
