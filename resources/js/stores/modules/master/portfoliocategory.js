import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/portfoliocategories',
    formErrors: {}
})

const portfoliocategory = {
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
export default portfoliocategory
