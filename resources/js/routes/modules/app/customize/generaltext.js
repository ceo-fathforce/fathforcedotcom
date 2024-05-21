export default [
    {
        path: 'generaltexts',
        name: 'Generaltext',
        redirect: { name: 'GeneraltextList' },
        meta: {
            label: 'customize.generaltext.generaltext',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['generaltext:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'GeneraltextList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.generaltext.generaltext',
                },
                component: () => import('@views/Pages/Customize/Generaltext/Index.vue'),
            },
            {
                path: 'create',
                name: 'GeneraltextCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.generaltext.generaltext',
                    permissions: ['generaltext:create']
                },
                component: () => import('@views/Pages/Customize/Generaltext/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'GeneraltextEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.generaltext.generaltext',
                    permissions: ['generaltext:edit']
                },
                component: () => import('@views/Pages/Customize/Generaltext/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'GeneraltextDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.generaltext.generaltext',
                    permissions: ['generaltext:create']
                },
                component: () => import('@views/Pages/Customize/Generaltext/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'GeneraltextShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.generaltext.generaltext',
                    permissions: ['generaltext:read']
                },
                component: () => import('@views/Pages/Customize/Generaltext/Show.vue'),
            }
        ]
    },
]
