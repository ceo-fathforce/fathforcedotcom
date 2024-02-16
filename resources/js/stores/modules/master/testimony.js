import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/testimonys',
    formErrors: {}
})

const testimony = {
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
export default testimony