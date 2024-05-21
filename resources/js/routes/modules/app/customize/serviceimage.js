export default [
    {
        path: 'serviceimages',
        name: 'Serviceimage',
        redirect: { name: 'ServiceimageList' },
        meta: {
            label: 'customize.serviceimage.serviceimage',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['serviceimage:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'ServiceimageList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.serviceimage.serviceimage',
                },
                component: () => import('@views/Pages/Customize/Serviceimage/Index.vue'),
            },
            {
                path: 'create',
                name: 'ServiceimageCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.serviceimage.serviceimage',
                    permissions: ['serviceimage:create']
                },
                component: () => import('@views/Pages/Customize/Serviceimage/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'ServiceimageEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.serviceimage.serviceimage',
                    permissions: ['serviceimage:edit']
                },
                component: () => import('@views/Pages/Customize/Serviceimage/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'ServiceimageDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.serviceimage.serviceimage',
                    permissions: ['serviceimage:create']
                },
                component: () => import('@views/Pages/Customize/Serviceimage/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'ServiceimageShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.serviceimage.serviceimage',
                    permissions: ['serviceimage:read']
                },
                component: () => import('@views/Pages/Customize/Serviceimage/Show.vue'),
            }
        ]
    },
]
