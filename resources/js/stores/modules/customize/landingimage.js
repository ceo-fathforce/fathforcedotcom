import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/landingimages',
    formErrors: {}
})

const landingimage = {
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
export default landingimage