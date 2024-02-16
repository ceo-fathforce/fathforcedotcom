import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/portfolios',
    formErrors: {}
})

const portfolio = {
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
export default portfolio