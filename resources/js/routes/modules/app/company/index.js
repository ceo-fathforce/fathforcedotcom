import company from "./company";
import companycategory from "./companycategory";

export default [
  {
    path: "company",
    name: "Company",
    redirect: { name: "CompanyList" },
    meta: {
      label: "company.company",
      icon: "fas fa-database",
      hideChildren: false,
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [...companycategory, ...company],
    
  },
];
