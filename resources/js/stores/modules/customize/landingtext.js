import { mutations, actions, getters } from "@stores/global"

const initialState = () => ({
    initURL: '/app/customize/landingtexts',
    formErrors: {}
})

const landingtext = {
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
export default landingtext