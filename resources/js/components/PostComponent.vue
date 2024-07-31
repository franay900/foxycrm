<template>
    
    {{ vasyaJob }}
    <button @click="sayHello">Нажать</button>

    <div v-for="person in persons" v-if="person.age > 20">
        <a href="">
            {{ person.name }}
        </a>
    </div>
</template>

<script>
    export default {
        name: 'PostComponent',
        data(){
            return {
                persons:[ {
                    name: "Вася",
                    age: 20,
                    job: "Кондитер"
                },
                {
                    name: "Иван",
                    age: 15,
                    job: "Дизайнер"
                },
                ]
            }
        },
        methods: {
            sayHello(){
                console.log("Hi");
            }
        },
        computed: {
            
        }
    }
</script>
