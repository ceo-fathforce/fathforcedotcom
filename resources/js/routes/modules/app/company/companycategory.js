export default [
  {
    path: "companycategories",
    name: "CompanyCategory",
    redirect: { name: "CompanyCategoryList" },
    meta: {
      label: "company.companycategory.companycategory",
      icon: "fa-solid fa-arrow-right",
      hideChildren: true,
      permissions: ['companycategory:read']
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [
      {
        path: "",
        name: "CompanyCategoryList",
        meta: {
          trans: "global.list",
          label: "company.companycategory.companycategory",
        },
        component: () =>
          import("@views/Companys/Company/CompanyCategory/Index.vue"),
      },
      {
        path: "create",
        name: "CompanyCategoryCreate",
        meta: {
          type: "create",
          action: "create",
          trans: "global.add",
          label: "company.companycategory.companycategory",
          permissions: ['companycategory:create']
        },
        component: () =>
          import("@views/Companys/Company/CompanyCategory/Action.vue"),
      },
      {
        path: ":uuid/edit",
        name: "CompanyCategoryEdit",
        meta: {
          type: "edit",
          action: "update",
          trans: "global.edit",
          label: "company.companycategory.companycategory",
          permissions: ['companycategory:edit']
        },
        component: () =>
          import("@views/Companys/Company/CompanyCategory/Action.vue"),
      },
      {
        path: ":uuid/duplicate",
        name: "CompanyCategoryDuplicate",
        meta: {
          type: "duplicate",
          action: "create",
          trans: "global.duplicate",
          label: "company.companycategory.companycategory",
          permissions: ['companycategory:create']
        },
        component: () =>
          import("@views/Companys/Company/CompanyCategory/Action.vue"),
      },
      {
        path: ":uuid",
        name: "CompanyCategoryShow",
        meta: {
          trans: "global.detail",
          label: "company.companycategory.companycategory",
          permissions: ['companycategory:read']
        },
        component: () => import("@views/Companys/Company/CompanyCategory/Show.vue"),
      },
    ],
  },
];
