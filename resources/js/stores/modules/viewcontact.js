import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/viewcontacts',
    formErrors: {}
})

const viewcontact = {
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
export default viewcontact
