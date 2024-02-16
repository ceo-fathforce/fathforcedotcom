export default [
    {
      path: "partnercompanys",
      name: "PartnerCompany",
      redirect: { name: "PartnerCompanyList" },
      meta: {
        label: "master.partnercompany.partnercompany",
        icon: "fa-solid fa-arrow-right",
        hideChildren: true,
        permissions: ['partnercompany:read']
      },
      component: {
        template: "<router-view></router-view>",
      },
      children: [
        {
          path: "",
          name: "PartnerCompanyList",
          meta: {
            trans: "global.list",
            label: "master.partnercompany.partnercompany",
          },
          component: () =>
            import("@views/Pages/Master/PartnerCompany/Index.vue"),
        },
        {
          path: "create",
          name: "PartnerCompanyCreate",
          meta: {
            type: "create",
            action: "create",
            trans: "global.add",
            label: "master.partnercompany.partnercompany",
            permissions: ['partnercompany:create']
          },
          component: () =>
            import("@views/Pages/Master/PartnerCompany/Action.vue"),
        },
        {
          path: ":uuid/edit",
          name: "PartnerCompanyEdit",
          meta: {
            type: "edit",
            action: "update",
            trans: "global.edit",
            label: "master.partnercompany.partnercompany",
            permissions: ['partnercompany:edit']
          },
          component: () =>
            import("@views/Pages/Master/PartnerCompany/Action.vue"),
        },
        {
          path: ":uuid/duplicate",
          name: "PartnerCompanyDuplicate",
          meta: {
            type: "duplicate",
            action: "create",
            trans: "global.duplicate",
            label: "master.partnercompany.partnercompany",
            permissions: ['partnercompany:create']
          },
          component: () =>
            import("@views/Pages/Master/PartnerCompany/Action.vue"),
        },
        {
          path: ":uuid",
          name: "PartnerCompanyShow",
          meta: {
            trans: "global.detail",
            label: "master.partnercompany.partnercompany",
            permissions: ['partnercompany:read']
          },
          component: () => import("@views/Pages/Master/PartnerCompany/Show.vue"),
        },
      ],
    },
  ];
  