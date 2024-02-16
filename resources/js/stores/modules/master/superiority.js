import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/superioritys',
    formErrors: {}
})

const superiority = {
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
export default superiority