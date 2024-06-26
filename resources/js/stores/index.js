import { createStore } from "vuex";

import setup from "@stores/modules/setup";
import navigation from "@stores/modules/navigation";
import config from "@stores/modules/config";
import layout from "@stores/modules/layout";
import dashboard from "@stores/modules/dashboard";
import image from "@stores/modules/image";
import auth from "@stores/modules/auth";
import user from "@stores/modules/user";
import utility from "@stores/modules/utility";
import project from "@stores/modules/project";
import master from "@stores/modules/master";
import blog from "@stores/modules/blog";
import customize from "@stores/modules/customize";
import landing from "@stores/modules/landing";
import option from "@stores/modules/option";
import tag from "@stores/modules/tag";
import moduleImport from "@stores/modules/moduleImport";
import viewcontact from "@stores/modules/viewcontact";

const initialState = () => ({});

const store = createStore({
  modules: {
    setup,
    navigation,
    config,
    layout,
    dashboard,
    image,
    auth,
    user,
    project,
    master,
    blog,
    landing,
    utility,
    option,
    tag,
    moduleImport,
    customize,
    viewcontact,
  },
  state: initialState,
  mutations: {},
  actions: {},
  getters: {},
});

export default store;
