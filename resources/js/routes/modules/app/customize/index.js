import landingimage from "./landingimage";
import landingtext from "./landingtext";
import companyimage from "./companyimage";
import companytext from "./companytext";
import serviceimage from "./serviceimage";
import servicetext from "./servicetext";
import generaltext from "./generaltext";

export default [
  {
    path: "customize",
    name: "Customize",
    redirect: { name: "CustomizeList" },
    meta: {
      label: "customize.customize",
      icon: "fa-solid fa-photo-film",
      hideChildren: false,
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [...landingtext, ...landingimage,...companytext, ...companyimage, ...servicetext, ...serviceimage, ...generaltext],
  },
];
