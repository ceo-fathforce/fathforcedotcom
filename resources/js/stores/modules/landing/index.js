import axios from "axios";
import * as Api from "@core/apis";
import * as Form from "@core/utils/form";
import { useToast } from "vue-toastification";
import { mutations, actions, getters } from "@stores/global";

const toast = useToast();

import page from "@stores/modules/landing/page";
import pagecategory from "@stores/modules/landing/pagecategory";

const initialState = () => ({
  initURL: "/app/landing",
  formErrors: {},
});

const landing = {
  namespaced: true,
  state: initialState,
  modules: {
    page,
    pagecategory,
  },
  mutations: {
    ...mutations,
  },
  actions: {
    ...actions,
  },
  getters: {
    ...getters,
  },
};

export default landing;
