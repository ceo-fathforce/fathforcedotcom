export default [
    {
        path: 'socialmedias',
        name: 'Socialmedia',
        redirect: { name: 'SocialmediaList' },
        meta: {
            label: 'master.socialmedia.socialmedia',
            icon: 'fa-solid fa-arrow-right',
            hideChildren: true,
            permissions: ['socialmedia:read']
        },
        component: {
            template: '<router-view></router-view>'
        },
        children: [
            {
                path: '',
                name: 'SocialmediaList',
                meta: {
                    trans: 'global.list',
                    label: 'master.socialmedia.socialmedias',
                },
                component: () => import('@views/Pages/Master/Socialmedia/Index.vue'),
            },
            {
                path: 'create',
                name: 'SocialmediaCreate',
                meta: {
                    type: 'create',
                    action: 'create',
                    trans: 'global.add',
                    label: 'master.socialmedia.socialmedia',
                    permissions: ['socialmedia:create']
                },
                component: () => import('@views/Pages/Master/Socialmedia/Action.vue'),
            },
            {
                path: ':uuid/edit',
                name: 'SocialmediaEdit',
                meta: {
                    type: 'edit',
                    action: 'update',
                    trans: 'global.edit',
                    label: 'master.socialmedia.socialmedia',
                    permissions: ['socialmedia:edit']
                },
                component: () => import('@views/Pages/Master/Socialmedia/Action.vue'),
            },
            {
                path: ':uuid/duplicate',
                name: 'SocialmediaDuplicate',
                meta: {
                    type: 'duplicate',
                    action: 'create',
                    trans: 'global.duplicate',
                    label: 'master.socialmedia.socialmedia',
                    permissions: ['socialmedia:create']
                },
                component: () => import('@views/Pages/Master/Socialmedia/Action.vue'),
            },
            {
                path: ':uuid',
                name: 'SocialmediaShow',
                meta: {
                    trans: 'global.detail',
                    label: 'master.socialmedia.socialmedia',
                    permissions: ['socialmedia:read']
                },
                component: () => import('@views/Pages/Master/Socialmedia/Show.vue'),
            }
        ]
    },
]
