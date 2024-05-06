export default [
    {
        path: 'landingimages',
        name: 'Landingimage',
        redirect: { name: 'LandingimageList' },
        meta: {
            label: 'customize.landingimage.landingimage',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['landingimage:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'LandingimageList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.landingimage.landingimage',
                },
                component: () => import('@views/Pages/Customize/Landingimage/Index.vue'),
            },
            {
                path: 'create',
                name: 'LandingimageCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.landingimage.landingimage',
                    permissions: ['landingimage:create']
                },
                component: () => import('@views/Pages/Customize/Landingimage/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'LandingimageEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.landingimage.landingimage',
                    permissions: ['landingimage:edit']
                },
                component: () => import('@views/Pages/Customize/Landingimage/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'LandingimageDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.landingimage.landingimage',
                    permissions: ['landingimage:create']
                },
                component: () => import('@views/Pages/Customize/Landingimage/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'LandingimageShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.landingimage.landingimage',
                    permissions: ['landingimage:read']
                },
                component: () => import('@views/Pages/Customize/Landingimage/Show.vue'),
            }
        ]
    },
]
