import landingimage from "./landingimage";
import landingtext from "./landingtext";

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
    children: [...landingtext, ...landingimage],
  },
];
