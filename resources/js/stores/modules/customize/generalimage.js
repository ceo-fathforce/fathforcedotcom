import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/generalimages',
    formErrors: {}
})

const generalimage = {
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
export default generalimage