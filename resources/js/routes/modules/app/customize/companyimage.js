export default [
    {
        path: 'companyimages',
        name: 'Companyimage',
        redirect: { name: 'CompanyimageList' },
        meta: {
            label: 'customize.companyimage.companyimage',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['companyimage:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'CompanyimageList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.companyimage.companyimage',
                },
                component: () => import('@views/Pages/Customize/Companyimage/Index.vue'),
            },
            {
                path: 'create',
                name: 'CompanyimageCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.companyimage.companyimage',
                    permissions: ['companyimage:create']
                },
                component: () => import('@views/Pages/Customize/Companyimage/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'CompanyimageEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.companyimage.companyimage',
                    permissions: ['companyimage:edit']
                },
                component: () => import('@views/Pages/Customize/Companyimage/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'CompanyimageDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.companyimage.companyimage',
                    permissions: ['companyimage:create']
                },
                component: () => import('@views/Pages/Customize/Companyimage/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'CompanyimageShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.companyimage.companyimage',
                    permissions: ['companyimage:read']
                },
                component: () => import('@views/Pages/Customize/Companyimage/Show.vue'),
            }
        ]
    },
]
