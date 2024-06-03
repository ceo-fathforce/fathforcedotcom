import axios from "axios";
import * as Api from "@core/apis";
import * as Form from "@core/utils/form";
import { useToast } from "vue-toastification";
import { mutations, actions, getters } from "@stores/global";

const toast = useToast();

import landingtext from "@stores/modules/customize/landingtext";
import landingimage from "@stores/modules/customize/landingimage";
import companytext from "@stores/modules/customize/companytext";
import companyimage from "@stores/modules/customize/companyimage";
import servicetext from "@stores/modules/customize/servicetext";
import serviceimage from "@stores/modules/customize/serviceimage";
import generaltext from "@stores/modules/customize/generaltext";
import generalimage from "@stores/modules/customize/generalimage";

const initialState = () => ({
  initURL: "/app/customize",
  formErrors: {},
});

const customize = {
  namespaced: true,
  state: initialState,
  modules: {
    landingtext,
    landingimage,
    companytext,
    companyimage,
    servicetext,
    serviceimage,
    generaltext,
    generalimage,
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

export default customize;
