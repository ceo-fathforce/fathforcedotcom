export default [
    {
      path: "testimonys",
      name: "Testimony",
      redirect: { name: "TestimonyList" },
      meta: {
        label: "master.testimony.testimony",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['testimony:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "TestimonyList",
          meta: {
            trans: "global.list",
            label: "master.testimony.testimony",
          },
          component: () =>
            import("@views/Pages/Master/Testimony/Index.vue"),
        },
        {
          path: "create",
          name: "TestimonyCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.testimony.testimony",
            permissions: ['testimony:create']
          },
          component: () =>
            import("@views/Pages/Master/Testimony/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "TestimonyEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.testimony.testimony",
            permissions: ['testimony:edit']
          },
          component: () =>
            import("@views/Pages/Master/Testimony/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "TestimonyDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.testimony.testimony",
            permissions: ['testimony:create']
          },
          component: () =>
            import("@views/Pages/Master/Testimony/Action.vue"),
        },
        {
          path: ":uuid",
          name: "TestimonyShow",
          meta: {
            trans: "global.detail",
            label: "master.testimony.testimony",
            permissions: ['testimony:read']
          },
          component: () => import("@views/Pages/Master/Testimony/Show.vue"),
        },
      ],
    },
  ];
  