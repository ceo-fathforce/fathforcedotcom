import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/servicetexts',
    formErrors: {}
})

const servicetext = {
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
export default servicetext