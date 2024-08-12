import router from "../../router.js";


const state = {
    user: null,
    users: null
}

const getters= {
    user: state =>  state.user ,
    users: state => state.users
}

const actions = {
    getUser({state, commit, dispatch}, id){
        axios.get('/api/users/' + id)
            .then( res => {

                commit('setUser', res.data.data)


            })
    },

    getUsers({commit}) {
        axios.get('/api/users')
            .then(res => {
                commit('setUsers', res.data.data);

            })
    },

    deleteUser({dispatch},id) {
        axios.delete('/api/users/' + id)
            .then(res => {
                dispatch('getUsers');
            })
    },

    updateUser({}, data) {
        axios.patch('/api/users/' + data.id, {name: data.name, surname: data.surname})
            .then(res => {

                router.push({name: 'user.show', params: {id: data.id} })
            })
    },

    store({}, data){
        axios.post('/api/users', {name: data.name, surname: data.surname})
            .then( res => {
                router.push({name: 'user.index'})

            })
    },





}

const mutations = {
    setUser(state, user){
        state.user = user;
    },
    setUsers(state, users) {
        state.users = users;
    }
}


export default {
    state, mutations, getters, actions
}
