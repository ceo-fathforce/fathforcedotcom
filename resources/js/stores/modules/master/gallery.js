import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/gallerys',
    formErrors: {}
})

const gallery = {
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
export default gallery