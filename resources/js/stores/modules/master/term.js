import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/terms',
    formErrors: {}
})

const term = {
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
export default term