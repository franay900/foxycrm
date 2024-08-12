<script >


import router from "../../router.js";
import {isDisabled} from "bootstrap/js/src/util/index.js";

export default {
    name: 'Create',

    data(){
        return {
          name: null,
          surname: null
      }

    },

    methods: {


    },

    computed: {
        isDisabled(){

            return this.name && this.surname
        }
    }

}
</script>

<template>
    <div>
        <div>
            <input type="text" class="form-control" placeholder="Фамилия" v-model="surname">
        </div>
        <div>
            <input type="text" class="form-control" placeholder="Имя" v-model="name">
        </div>
        <div class="mt-3">
            <button :disabled="!isDisabled" class="btn btn-success" @click.prevent="$store.dispatch('store', {name: name, surname: surname})">Добавить</button>
        </div>



    </div>
</template>

<style scoped>

</style>
