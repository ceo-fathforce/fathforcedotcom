export default [
    {
        path: 'companydatas',
        name: 'Companydata',
        redirect: { name: 'CompanydataList' },
        meta: {
            label: 'master.companydata.companydata',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['companydata:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'CompanydataList',
                meta: {
                    trans: 'global.list',
                    label: 'master.companydata.companydatas',
                },
                component: () => import('@views/Pages/Master/Companydata/Index.vue'),
            },
            {
                path: 'create',
                name: 'CompanydataCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'master.companydata.companydata',
                    permissions: ['companydata:create']
                },
                component: () => import('@views/Pages/Master/Companydata/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'CompanydataEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'master.companydata.companydata',
                    permissions: ['companydata:edit']
                },
                component: () => import('@views/Pages/Master/Companydata/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'CompanydataDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'master.companydata.companydata',
                    permissions: ['companydata:create']
                },
                component: () => import('@views/Pages/Master/Companydata/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'CompanydataShow',
                meta: {
                    trans: 'global.detail',
                    label: 'master.companydata.companydata',
                    permissions: ['companydata:read']
                },
                component: () => import('@views/Pages/Master/Companydata/Show.vue'),
            }
        ]
    },
]
