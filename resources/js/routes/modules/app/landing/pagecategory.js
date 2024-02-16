export default [
  {
    path: "pagecategories",
    name: "PageCategory",
    redirect: { name: "PageCategoryList" },
    meta: {
      label: "landing.pagecategory.pagecategory",
      icon: "fa-solid fa-arrow-right",
      hideChildren: true,
      permissions: ['pagecategory:read']
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [
      {
        path: "",
        name: "PageCategoryList",
        meta: {
          trans: "global.list",
          label: "landing.pagecategory.pagecategory",
        },
        component: () =>
          import("@views/Pages/Landing/PageCategory/Index.vue"),
      },
      {
        path: "create",
        name: "PageCategoryCreate",
        meta: {
          type: "create",
          action: "create",
          trans: "global.add",
          label: "landing.pagecategory.pagecategory",
          permissions: ['pagecategory:create']
        },
        component: () =>
          import("@views/Pages/Landing/PageCategory/Action.vue"),
      },
      {
        path: ":uuid/edit",
        name: "PageCategoryEdit",
        meta: {
          type: "edit",
          action: "update",
          trans: "global.edit",
          label: "landing.pagecategory.pagecategory",
          permissions: ['pagecategory:edit']
        },
        component: () =>
          import("@views/Pages/Landing/PageCategory/Action.vue"),
      },
      {
        path: ":uuid/duplicate",
        name: "PageCategoryDuplicate",
        meta: {
          type: "duplicate",
          action: "create",
          trans: "global.duplicate",
          label: "landing.pagecategory.pagecategory",
          permissions: ['pagecategory:create']
        },
        component: () =>
          import("@views/Pages/Landing/PageCategory/Action.vue"),
      },
      {
        path: ":uuid",
        name: "PageCategoryShow",
        meta: {
          trans: "global.detail",
          label: "landing.pagecategory.pagecategory",
          permissions: ['pagecategory:read']
        },
        component: () => import("@views/Pages/Landing/PageCategory/Show.vue"),
      },
    ],
  },
];
