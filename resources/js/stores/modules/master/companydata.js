import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/companydatas',
    formErrors: {}
})

const companydata = {
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
export default companydata
