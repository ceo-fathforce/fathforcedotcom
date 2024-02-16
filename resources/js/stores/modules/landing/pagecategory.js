import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/landing/pagecategories',
    formErrors: {}
})

const pagecategory = {
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
export default pagecategory
