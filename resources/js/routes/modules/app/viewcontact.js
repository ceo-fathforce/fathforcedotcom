export default [
    {
        path: 'viewcontacts',
        name: 'Viewcontact',
        redirect: { name: 'ViewcontactList' },
        meta: {
            label: 'viewcontact.viewcontact',
            icon: 'fas fa-boxes',
            hideChildren: true,
            permissions: ['viewcontact:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'ViewcontactList',
                meta: {
                    trans: 'global.list',
                    label: 'viewcontact.viewcontacts',
                },
                component: () => import('@views/Pages/Viewcontact/Index.vue'),
            },
            {
                path: 'create',
                name: 'ViewcontactCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'viewcontact.viewcontact',
                    permissions: ['viewcontact:create']
                },
                component: () => import('@views/Pages/Viewcontact/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'ViewcontactEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'viewcontact.viewcontact',
                    permissions: ['viewcontact:edit']
                },
                component: () => import('@views/Pages/Viewcontact/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'ViewcontactDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'viewcontact.viewcontact',
                    permissions: ['viewcontact:create']
                },
                component: () => import('@views/Pages/Viewcontact/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'ViewcontactShow',
                meta: {
                    trans: 'global.detail',
                    label: 'viewcontact.viewcontact',
                    permissions: ['viewcontact:read']
                },
                component: () => import('@views/Pages/Viewcontact/Show.vue'),
            }
        ]
    },
]
