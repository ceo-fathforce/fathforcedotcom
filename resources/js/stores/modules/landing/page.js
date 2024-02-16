import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/landing/pages',
    formErrors: {}
})

const page = {
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
export default page