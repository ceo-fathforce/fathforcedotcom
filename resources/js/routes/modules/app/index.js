import dashboard from "./dashboard";
import user from "./user";
import utility from "./utility";
import config from "./config";
import project from "./project";
import master from "./master";
import landing from "./landing";
import blog from "./blog";
import customize from "./customize"

export default [
  ...dashboard,
  ...user,
  ...project,
  ...master,
  ...blog,
  ...landing,
  ...utility,
  ...config,
  ...customize,
];
