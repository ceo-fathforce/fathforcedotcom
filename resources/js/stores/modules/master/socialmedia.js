import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/socialmedias',
    formErrors: {}
})

const socialmedia = {
    namespaced: true,
    state: initialState,
    modules: {},
    mutations: {
        ...mutations
    },
    actions: {
        ...actions
    },
    getters: {
        ...getters
    }
}
export default socialmedia
