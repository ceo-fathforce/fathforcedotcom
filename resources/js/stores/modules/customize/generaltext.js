import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/generaltexts',
    formErrors: {}
})

const generaltext = {
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
export default generaltext