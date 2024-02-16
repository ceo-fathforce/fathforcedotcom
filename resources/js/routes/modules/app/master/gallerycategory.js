export default [
  {
    path: "gallerycategories",
    name: "GalleryCategory",
    redirect: { name: "GalleryCategoryList" },
    meta: {
      label: "master.gallerycategory.gallerycategory",
      icon: "fa-solid fa-arrow-right",
      hideChildren: true,
      permissions: ['gallerycategory:read']
    },
    component: {
      template: "<router-view></router-view>",
    },
    children: [
      {
        path: "",
        name: "GalleryCategoryList",
        meta: {
          trans: "global.list",
          label: "master.gallerycategory.gallerycategory",
        },
        component: () =>
          import("@views/Pages/Master/GalleryCategory/Index.vue"),
      },
      {
        path: "create",
        name: "GalleryCategoryCreate",
        meta: {
          type: "create",
          action: "create",
          trans: "global.add",
          label: "master.gallerycategory.gallerycategory",
          permissions: ['gallerycategory:create']
        },
        component: () =>
          import("@views/Pages/Master/GalleryCategory/Action.vue"),
      },
      {
        path: ":uuid/edit",
        name: "GalleryCategoryEdit",
        meta: {
          type: "edit",
          action: "update",
          trans: "global.edit",
          label: "master.gallerycategory.gallerycategory",
          permissions: ['gallerycategory:edit']
        },
        component: () =>
          import("@views/Pages/Master/GalleryCategory/Action.vue"),
      },
      {
        path: ":uuid/duplicate",
        name: "GalleryCategoryDuplicate",
        meta: {
          type: "duplicate",
          action: "create",
          trans: "global.duplicate",
          label: "master.gallerycategory.gallerycategory",
          permissions: ['gallerycategory:create']
        },
        component: () =>
          import("@views/Pages/Master/GalleryCategory/Action.vue"),
      },
      {
        path: ":uuid",
        name: "GalleryCategoryShow",
        meta: {
          trans: "global.detail",
          label: "master.gallerycategory.gallerycategory",
          permissions: ['gallerycategory:read']
        },
        component: () => import("@views/Pages/Master/GalleryCategory/Show.vue"),
      },
    ],
  },
];
