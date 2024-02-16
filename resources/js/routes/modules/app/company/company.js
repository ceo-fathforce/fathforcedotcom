export default [
    {
        path: 'companys',
        name: 'Company',
        redirect: { name: 'CompanyList' },
        meta: {
            label: 'company.company.company',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['company:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'CompanyList',
                meta: {
                    trans: 'global.list',
                    label: 'company.company.company',
                },
                component: () => import('@views/Companys/Company/Company/Index.vue'),
            },
            {
                path: 'create',
                name: 'CompanyCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'company.company.company',
                    permissions: ['company:create']
                },
                component: () => import('@views/Companys/Company/Company/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'CompanyEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'company.company.company',
                    permissions: ['company:edit']
                },
                component: () => import('@views/Companys/Company/Company/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'CompanyDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'company.company.company',
                    permissions: ['company:create']
                },
                component: () => import('@views/Companys/Company/Company/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'CompanyShow',
                meta: {
                    trans: 'global.detail',
                    label: 'company.company.company',
                    permissions: ['company:read']
                },
                component: () => import('@views/Companys/Company/Company/Show.vue'),
            }
        ]
    },
]
