export default [
  {
      path: 'gallerys',
      name: 'Gallery',
      redirect: { name: 'GalleryList' },
      meta: {
          label: 'master.gallery.gallery',
          icon: 'fa-solid fa-arrow-right',
          hideChildren: true,
          permissions: ['gallery:read']
      },
      component: {
          template: '<router-view></router-view>'
      },
      children: [
          {
              path: '',
              name: 'GalleryList',
              meta: {
                  trans: 'global.list',
                  label: 'master.gallery.gallery',
              },
              component: () => import('@views/Pages/Master/Gallery/Index.vue'),
          },
          {
              path: 'create',
              name: 'GalleryCreate',
              meta: {
                  type: 'create',
                  action: 'create',
                  trans: 'global.add',
                  label: 'master.gallery.gallery',
                  permissions: ['gallery:create']
              },
              component: () => import('@views/Pages/Master/Gallery/Action.vue'),
          },
          {
              path: ':uuid/edit',
              name: 'GalleryEdit',
              meta: {
                  type: 'edit',
                  action: 'update',
                  trans: 'global.edit',
                  label: 'master.gallery.gallery',
                  permissions: ['gallery:edit']
              },
              component: () => import('@views/Pages/Master/Gallery/Action.vue'),
          },
          {
              path: ':uuid/duplicate',
              name: 'GalleryDuplicate',
              meta: {
                  type: 'duplicate',
                  action: 'create',
                  trans: 'global.duplicate',
                  label: 'master.gallery.gallery',
                  permissions: ['gallery:create']
              },
              component: () => import('@views/Pages/Master/Gallery/Action.vue'),
          },
          {
              path: ':uuid',
              name: 'GalleryShow',
              meta: {
                  trans: 'global.detail',
                  label: 'master.gallery.gallery',
                  permissions: ['gallery:read']
              },
              component: () => import('@views/Pages/Master/Gallery/Show.vue'),
          }
      ]
  },
]
