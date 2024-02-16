export default [
    {
      path: "terms",
      name: "Term",
      redirect: { name: "TermList" },
      meta: {
        label: "master.term.term",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['term:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "TermList",
          meta: {
            trans: "global.list",
            label: "master.term.term",
          },
          component: () =>
            import("@views/Pages/Master/Term/Index.vue"),
        },
        {
          path: "create",
          name: "TermCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.term.term",
            permissions: ['term:create']
          },
          component: () =>
            import("@views/Pages/Master/Term/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "TermEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.term.term",
            permissions: ['term:edit']
          },
          component: () =>
            import("@views/Pages/Master/Term/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "TermDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.term.term",
            permissions: ['term:create']
          },
          component: () =>
            import("@views/Pages/Master/Term/Action.vue"),
        },
        {
          path: ":uuid",
          name: "TermShow",
          meta: {
            trans: "global.detail",
            label: "master.term.term",
            permissions: ['term:read']
          },
          component: () => import("@views/Pages/Master/Term/Show.vue"),
        },
      ],
    },
  ];
  