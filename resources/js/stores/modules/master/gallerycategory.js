import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/gallerycategories',
    formErrors: {}
})

const gallerycategory = {
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
export default gallerycategory
