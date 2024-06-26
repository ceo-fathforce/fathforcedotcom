import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/partnermembers',
    formErrors: {}
})

const partnermember = {
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
export default partnermember