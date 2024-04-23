import axios from "axios";
import * as Api from "@core/apis";
import * as Form from "@core/utils/form";
import { useToast } from "vue-toastification";
import { mutations, actions, getters } from "@stores/global";

const toast = useToast();

import product from "@stores/modules/master/product";
import productcategory from "@stores/modules/master/productcategory";
import portfolio from "@stores/modules/master/portfolio";
import portfoliocategory from "@stores/modules/master/portfoliocategory";
import gallery from "@stores/modules/master/gallery";
import gallerycategory from "@stores/modules/master/gallerycategory";
import partnercompany from "@stores/modules/master/partnercompany";
import partnerschool from "@stores/modules/master/partnerschool";
import faq from "@stores/modules/master/faq";
import term from "@stores/modules/master/term";
import servicelist from "@stores/modules/master/servicelist";
import testimony from "@stores/modules/master/testimony";
import superiority from "@stores/modules/master/superiority";
import companydata from "@stores/modules/master/companydata";
import socialmedia from "@stores/modules/master/socialmedia";

const initialState = () => ({
  initURL: "/app/master",
  formErrors: {},
});

const master = {
  namespaced: true,
  state: initialState,
  modules: {
    product,
    productcategory,
    portfolio,
    portfoliocategory,
    partnercompany,
    partnerschool,
    gallery,
    gallerycategory,
    faq,
    servicelist,
    term,
    testimony,
    superiority,
    companydata,
    socialmedia,
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

export default master;
