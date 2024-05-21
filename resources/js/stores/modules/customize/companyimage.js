import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/serviceimages',
    formErrors: {}
})

const serviceimage = {
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
export default serviceimage