export default [
    {
      path: "servicelists",
      name: "Servicelist",
      redirect: { name: "ServicelistList" },
      meta: {
        label: "master.servicelist.servicelist",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['servicelist:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "ServicelistList",
          meta: {
            trans: "global.list",
            label: "master.servicelist.servicelist",
          },
          component: () =>
            import("@views/Pages/Master/Servicelist/Index.vue"),
        },
        {
          path: "create",
          name: "ServicelistCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.servicelist.servicelist",
            permissions: ['servicelist:create']
          },
          component: () =>
            import("@views/Pages/Master/Servicelist/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "ServicelistEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.servicelist.servicelist",
            permissions: ['servicelist:edit']
          },
          component: () =>
            import("@views/Pages/Master/Servicelist/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "ServicelistDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.servicelist.servicelist",
            permissions: ['servicelist:create']
          },
          component: () =>
            import("@views/Pages/Master/Servicelist/Action.vue"),
        },
        {
          path: ":uuid",
          name: "ServicelistShow",
          meta: {
            trans: "global.detail",
            label: "master.servicelist.servicelist",
            permissions: ['servicelist:read']
          },
          component: () => import("@views/Pages/Master/Servicelist/Show.vue"),
        },
      ],
    },
  ];
  