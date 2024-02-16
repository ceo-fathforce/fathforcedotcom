import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/partnercompanys',
    formErrors: {}
})

const partnercompany = {
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
export default partnercompany