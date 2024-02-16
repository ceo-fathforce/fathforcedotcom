export default [
  {
    path: 'partnerschools',
    name: 'PartnerSchool',
    redirect: { name: 'PartnerSchoolList' },
    meta: {
      label: 'master.partnerschool.partnerschool',
      icon: 'fa-solid fa-arrow-right',
      hideChildren: true,
      permissions: ['partnerschool:read']
    },
    component: {
      template: '<router-view></router-view>'
    },
    children: [
      {
        path: '',
        name: 'PartnerSchoolList',
        meta: {
          trans: 'global.list',
          label: 'master.partnerschool.partnerschool',
        },
        component: () => import('@views/Pages/Master/PartnerSchool/Index.vue'),
      },
      {
        path: 'create',
        name: 'PartnerSchoolCreate',
        meta: {
          type: 'create',
          action: 'create',
          trans: 'global.add',
          label: 'master.partnerschool.partnerschool',
          permissions: ['partnerschool:create']
        },
        component: () => import('@views/Pages/Master/PartnerSchool/Action.vue'),
      },
      {
        path: ':uuid/edit',
        name: 'PartnerSchoolEdit',
        meta: {
          type: 'edit',
          action: 'update',
          trans: 'global.edit',
          label: 'master.partnerschool.partnerschool',
          permissions: ['partnerschool:edit']
        },
        component: () => import('@views/Pages/Master/PartnerSchool/Action.vue'),
      },
      {
        path: ':uuid/duplicate',
        name: 'PartnerSchoolDuplicate',
        meta: {
          type: 'duplicate',
          action: 'create',
          trans: 'global.duplicate',
          label: 'master.partnerschool.partnerschool',
          permissions: ['partnerschool:create']
        },
        component: () => import('@views/Pages/Master/PartnerSchool/Action.vue'),
      },
      {
        path: ':uuid',
        name: 'PartnerSchoolShow',
        meta: {
          trans: 'global.detail',
          label: 'master.partnerschool.partnerschool',
          permissions: ['partnerschool:read']
        },
        component: () => import('@views/Pages/Master/PartnerSchool/Show.vue'),
      }
    ]
  },
]
