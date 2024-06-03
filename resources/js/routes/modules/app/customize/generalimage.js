export default [
    {
        path: 'generalimages',
        name: 'Generalimage',
        redirect: { name: 'GeneralimageList' },
        meta: {
            label: 'customize.generalimage.generalimage',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['generalimage:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'GeneralimageList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.generalimage.generalimage',
                },
                component: () => import('@views/Pages/Customize/Generalimage/Index.vue'),
            },
            {
                path: 'create',
                name: 'GeneralimageCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.generalimage.generalimage',
                    permissions: ['generalimage:create']
                },
                component: () => import('@views/Pages/Customize/Generalimage/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'GeneralimageEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.generalimage.generalimage',
                    permissions: ['generalimage:edit']
                },
                component: () => import('@views/Pages/Customize/Generalimage/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'GeneralimageDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.generalimage.generalimage',
                    permissions: ['generalimage:create']
                },
                component: () => import('@views/Pages/Customize/Generalimage/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'GeneralimageShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.generalimage.generalimage',
                    permissions: ['generalimage:read']
                },
                component: () => import('@views/Pages/Customize/Generalimage/Show.vue'),
            }
        ]
    },
]
