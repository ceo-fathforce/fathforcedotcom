import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/companytexts',
    formErrors: {}
})

const companytext = {
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
export default companytext