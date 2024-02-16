export default [
    {
      path: "faqs",
      name: "Faq",
      redirect: { name: "FaqList" },
      meta: {
        label: "master.faq.faq",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['faq:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "FaqList",
          meta: {
            trans: "global.list",
            label: "master.faq.faq",
          },
          component: () =>
            import("@views/Pages/Master/Faq/Index.vue"),
        },
        {
          path: "create",
          name: "FaqCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.faq.faq",
            permissions: ['faq:create']
          },
          component: () =>
            import("@views/Pages/Master/Faq/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "FaqEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.faq.faq",
            permissions: ['faq:edit']
          },
          component: () =>
            import("@views/Pages/Master/Faq/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "FaqDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.faq.faq",
            permissions: ['faq:create']
          },
          component: () =>
            import("@views/Pages/Master/Faq/Action.vue"),
        },
        {
          path: ":uuid",
          name: "FaqShow",
          meta: {
            trans: "global.detail",
            label: "master.faq.faq",
            permissions: ['faq:read']
          },
          component: () => import("@views/Pages/Master/Faq/Show.vue"),
        },
      ],
    },
  ];
  