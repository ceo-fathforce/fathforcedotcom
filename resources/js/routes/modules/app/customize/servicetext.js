export default [
    {
        path: 'servicetexts',
        name: 'Servicetext',
        redirect: { name: 'ServicetextList' },
        meta: {
            label: 'customize.servicetext.servicetext',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['servicetext:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'ServicetextList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.servicetext.servicetext',
                },
                component: () => import('@views/Pages/Customize/Servicetext/Index.vue'),
            },
            {
                path: 'create',
                name: 'ServicetextCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.servicetext.servicetext',
                    permissions: ['servicetext:create']
                },
                component: () => import('@views/Pages/Customize/Servicetext/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'ServicetextEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.servicetext.servicetext',
                    permissions: ['servicetext:edit']
                },
                component: () => import('@views/Pages/Customize/Servicetext/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'ServicetextDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.servicetext.servicetext',
                    permissions: ['servicetext:create']
                },
                component: () => import('@views/Pages/Customize/Servicetext/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'ServicetextShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.servicetext.servicetext',
                    permissions: ['servicetext:read']
                },
                component: () => import('@views/Pages/Customize/Servicetext/Show.vue'),
            }
        ]
    },
]
