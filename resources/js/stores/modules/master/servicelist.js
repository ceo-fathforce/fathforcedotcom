import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/servicelists',
    formErrors: {}
})

const servicelist = {
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
export default servicelist