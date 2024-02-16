export default [
  {
      path: 'portfolios',
      name: 'Portfolio',
      redirect: { name: 'PortfolioList' },
      meta: {
          label: 'master.portfolio.portfolio',
          icon: 'fa-solid fa-arrow-right',
          hideChildren: true,
          permissions: ['portfolio:read']
      },
      component: {
          template: '<router-view></router-view>'
      },
      children: [
          {
              path: '',
              name: 'PortfolioList',
              meta: {
                  trans: 'global.list',
                  label: 'master.portfolio.portfolio',
              },
              component: () => import('@views/Pages/Master/Portfolio/Index.vue'),
          },
          {
              path: 'create',
              name: 'PortfolioCreate',
              meta: {
                  type: 'create',
                  action: 'create',
                  trans: 'global.add',
                  label: 'master.portfolio.portfolio',
                  permissions: ['portfolio:create']
              },
              component: () => import('@views/Pages/Master/Portfolio/Action.vue'),
          },
          {
              path: ':uuid/edit',
              name: 'PortfolioEdit',
              meta: {
                  type: 'edit',
                  action: 'update',
                  trans: 'global.edit',
                  label: 'master.portfolio.portfolio',
                  permissions: ['portfolio:edit']
              },
              component: () => import('@views/Pages/Master/Portfolio/Action.vue'),
          },
          {
              path: ':uuid/duplicate',
              name: 'PortfolioDuplicate',
              meta: {
                  type: 'duplicate',
                  action: 'create',
                  trans: 'global.duplicate',
                  label: 'master.portfolio.portfolio',
                  permissions: ['portfolio:create']
              },
              component: () => import('@views/Pages/Master/Portfolio/Action.vue'),
          },
          {
              path: ':uuid',
              name: 'PortfolioShow',
              meta: {
                  trans: 'global.detail',
                  label: 'master.portfolio.portfolio',
                  permissions: ['portfolio:read']
              },
              component: () => import('@views/Pages/Master/Portfolio/Show.vue'),
          }
      ]
  },
]
