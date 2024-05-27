export default [
    {
      path: "partnermembers",
      name: "PartnerMember",
      redirect: { name: "PartnerMemberList" },
      meta: {
        label: "master.partnermember.partnermember",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['partnermember:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "PartnerMemberList",
          meta: {
            trans: "global.list",
            label: "master.partnermember.partnermember",
          },
          component: () =>
            import("@views/Pages/Master/PartnerMember/Index.vue"),
        },
        {
          path: "create",
          name: "PartnerMemberCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.partnermember.partnermember",
            permissions: ['partnermember:create']
          },
          component: () =>
            import("@views/Pages/Master/PartnerMember/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "PartnerMemberEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.partnermember.partnermember",
            permissions: ['partnermember:edit']
          },
          component: () =>
            import("@views/Pages/Master/PartnerMember/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "PartnerMemberDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.partnermember.partnermember",
            permissions: ['partnermember:create']
          },
          component: () =>
            import("@views/Pages/Master/PartnerMember/Action.vue"),
        },
        {
          path: ":uuid",
          name: "PartnerMemberShow",
          meta: {
            trans: "global.detail",
            label: "master.partnermember.partnermember",
            permissions: ['partnermember:read']
          },
          component: () => import("@views/Pages/Master/PartnerMember/Show.vue"),
        },
      ],
    },
  ];
  