export default [
    {
        path: 'pages',
        name: 'Page',
        redirect: { name: 'PageList' },
        meta: {
            label: 'landing.page.page',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['page:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'PageList',
                meta: {
                    trans: 'global.list',
                    label: 'landing.page.page',
                },
                component: () => import('@views/Pages/Landing/Page/Index.vue'),
            },
            {
                path: 'create',
                name: 'PageCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'landing.page.page',
                    permissions: ['page:create']
                },
                component: () => import('@views/Pages/Landing/Page/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'PageEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'landing.page.page',
                    permissions: ['page:edit']
                },
                component: () => import('@views/Pages/Landing/Page/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'PageDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'landing.page.page',
                    permissions: ['page:create']
                },
                component: () => import('@views/Pages/Landing/Page/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'PageShow',
                meta: {
                    trans: 'global.detail',
                    label: 'landing.page.page',
                    permissions: ['page:read']
                },
                component: () => import('@views/Pages/Landing/Page/Show.vue'),
            }
        ]
    },
]
