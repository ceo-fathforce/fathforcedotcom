export default [
    {
      path: "superioritys",
      name: "Superiority",
      redirect: { name: "SuperiorityList" },
      meta: {
        label: "master.superiority.superiority",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['superiority:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "SuperiorityList",
          meta: {
            trans: "global.list",
            label: "master.superiority.superiority",
          },
          component: () =>
            import("@views/Pages/Master/Superiority/Index.vue"),
        },
        {
          path: "create",
          name: "SuperiorityCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.superiority.superiority",
            permissions: ['superiority:create']
          },
          component: () =>
            import("@views/Pages/Master/Superiority/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "SuperiorityEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.superiority.superiority",
            permissions: ['superiority:edit']
          },
          component: () =>
            import("@views/Pages/Master/Superiority/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "SuperiorityDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.superiority.superiority",
            permissions: ['superiority:create']
          },
          component: () =>
            import("@views/Pages/Master/Superiority/Action.vue"),
        },
        {
          path: ":uuid",
          name: "SuperiorityShow",
          meta: {
            trans: "global.detail",
            label: "master.superiority.superiority",
            permissions: ['superiority:read']
          },
          component: () => import("@views/Pages/Master/Superiority/Show.vue"),
        },
      ],
    },
  ];
  