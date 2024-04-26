export default [
    {
        path: 'landingtexts',
        name: 'Landingtext',
        redirect: { name: 'LandingtextList' },
        meta: {
            label: 'customize.landingtext.landingtext',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['landingtext:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'LandingtextList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.landingtext.landingtext',
                },
                component: () => import('@views/Pages/Customize/Landingtext/Index.vue'),
            },
            {
                path: 'create',
                name: 'LandingtextCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.landingtext.landingtext',
                    permissions: ['landingtext:create']
                },
                component: () => import('@views/Pages/Customize/Landingtext/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'LandingtextEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.landingtext.landingtext',
                    permissions: ['landingtext:edit']
                },
                component: () => import('@views/Pages/Customize/Landingtext/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'LandingtextDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.landingtext.landingtext',
                    permissions: ['landingtext:create']
                },
                component: () => import('@views/Pages/Customize/Landingtext/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'LandingtextShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.landingtext.landingtext',
                    permissions: ['landingtext:read']
                },
                component: () => import('@views/Pages/Customize/Landingtext/Show.vue'),
            }
        ]
    },
]
