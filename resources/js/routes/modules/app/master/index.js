import product from "./product";
import productcategory from "./productcategory";
import portfolio from "./portfolio";
import portfoliocategory from "./portfoliocategory";
import partnercompany from "./partnercompany";
import partnerschool from "./partnerschool";
import gallery from "./gallery";
import gallerycategory from "./gallerycategory";
import faq from "./faq";
import servicelist from "./servicelist";
import term from "./term";
import testimony from "./testimony";
import superiority from "./superiority";

export default [
  {
    path: "master",
    name: "Master",
    redirect: { name: "MasterList" },
    meta: {
      label: "master.master",
      icon: "fas fa-database",
      hideChildren: false,
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [...productcategory, ...product, ...portfoliocategory, ...portfolio, ...gallerycategory, ...gallery, ...partnercompany, ...partnerschool, ...faq, ...servicelist, ...term, ...testimony, ...superiority],
  },
];
