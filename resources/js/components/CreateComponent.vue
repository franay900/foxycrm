<template>
    
    <div class="mb-3">
        <label for="surname" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="surname"  v-model="surname">
       
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" class="form-control" id="name"  v-model="name">
    </div>
    <button class="btn btn-primary" @click="addUser">Добавить</button>
</template>

<script>
    export default {
        name: 'CreateComponent',
        data(){
            return { 
                name: null,
                surname: null,
            }
        },
        methods: {
           addUser() {
            axios.post('/api/users', {name: this.name, surname: this.surname})
            .then(res => {
                console.log(res.data)
            })
           }
        }
    }
</script>
