export default [
    {
        path: 'companytexts',
        name: 'Companytext',
        redirect: { name: 'CompanytextList' },
        meta: {
            label: 'customize.companytext.companytext',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['companytext:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'CompanytextList',
                meta: {
                    trans: 'global.list',
                    label: 'customize.companytext.companytext',
                },
                component: () => import('@views/Pages/Customize/Companytext/Index.vue'),
            },
            {
                path: 'create',
                name: 'CompanytextCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'customize.companytext.companytext',
                    permissions: ['companytext:create']
                },
                component: () => import('@views/Pages/Customize/Companytext/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'CompanytextEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'customize.companytext.companytext',
                    permissions: ['companytext:edit']
                },
                component: () => import('@views/Pages/Customize/Companytext/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'CompanytextDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'customize.companytext.companytext',
                    permissions: ['companytext:create']
                },
                component: () => import('@views/Pages/Customize/Companytext/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'CompanytextShow',
                meta: {
                    trans: 'global.detail',
                    label: 'customize.companytext.companytext',
                    permissions: ['companytext:read']
                },
                component: () => import('@views/Pages/Customize/Companytext/Show.vue'),
            }
        ]
    },
]
