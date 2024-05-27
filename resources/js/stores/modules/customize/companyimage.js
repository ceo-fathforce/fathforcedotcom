import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/companyimages',
    formErrors: {}
})

const companyimage = {
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
export default companyimage