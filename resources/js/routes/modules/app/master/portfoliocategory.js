export default [
  {
    path: "portfoliocategories",
    name: "PortfolioCategory",
    redirect: { name: "PortfolioCategoryList" },
    meta: {
      label: "master.portfoliocategory.portfoliocategory",
      icon: "fa-solid fa-arrow-right",
      hideChildren: true,
      permissions: ['portfoliocategory:read']
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [
      {
        path: "",
        name: "PortfolioCategoryList",
        meta: {
          trans: "global.list",
          label: "master.portfoliocategory.portfoliocategory",
        },
        component: () =>
          import("@views/Pages/Master/PortfolioCategory/Index.vue"),
      },
      {
        path: "create",
        name: "PortfolioCategoryCreate",
        meta: {
          type: "create",
          action: "create",
          trans: "global.add",
          label: "master.portfoliocategory.portfoliocategory",
          permissions: ['portfoliocategory:create']
        },
        component: () =>
          import("@views/Pages/Master/PortfolioCategory/Action.vue"),
      },
      {
        path: ":uuid/edit",
        name: "PortfolioCategoryEdit",
        meta: {
          type: "edit",
          action: "update",
          trans: "global.edit",
          label: "master.portfoliocategory.portfoliocategory",
          permissions: ['portfoliocategory:edit']
        },
        component: () =>
          import("@views/Pages/Master/PortfolioCategory/Action.vue"),
      },
      {
        path: ":uuid/duplicate",
        name: "PortfolioCategoryDuplicate",
        meta: {
          type: "duplicate",
          action: "create",
          trans: "global.duplicate",
          label: "master.portfoliocategory.portfoliocategory",
          permissions: ['portfoliocategory:create']
        },
        component: () =>
          import("@views/Pages/Master/PortfolioCategory/Action.vue"),
      },
      {
        path: ":uuid",
        name: "PortfolioCategoryShow",
        meta: {
          trans: "global.detail",
          label: "master.portfoliocategory.portfoliocategory",
          permissions: ['portfoliocategory:read']
        },
        component: () => import("@views/Pages/Master/PortfolioCategory/Show.vue"),
      },
    ],
  },
];
