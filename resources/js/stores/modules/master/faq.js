import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/master/faqs',
    formErrors: {}
})

const faq = {
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
export default faq