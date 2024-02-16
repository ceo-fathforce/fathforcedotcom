import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/partnerschools',
    formErrors: {}
})

const partnerschool = {
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
export default partnerschool