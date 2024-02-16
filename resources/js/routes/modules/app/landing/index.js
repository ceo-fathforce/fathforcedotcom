import page from "./page";
import pagecategory from "./pagecategory";

export default [
  {
    path: "landing",
    name: "Landing",
    redirect: { name: "LandingList" },
    meta: {
      label: "landing.landing",
      icon: "fas fa-database",
      hideChildren: false,
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [...pagecategory, ...page],
    
  },
];
