import dashboard from '@/pages/dashboard/index';
import notFound from '@/pages/404/index';
import task from "@/pages/task/index";
import basePage from './pages/basePage'
import user from "@/pages/rbac/user/index";
import updateProfile from "@/pages/profile/updateProfile";

const routes = [{
        path: '/home',
        component: basePage,
        children: [{
                path: 'dashboard',
                component: dashboard,
                name: 'dashboard',
            },
            {
                path: 'task',
                component: task,
                name: 'task',
                meta: {
                    dataUrl: 'task',
                    pageTitle: 'task'
                }
            },
            {
                path: '/profile',
                component: updateProfile,
                name: 'profile',
                meta: {
                    dataUrl: 'profile',
                    pageTitle: 'profile'
                }
            },
            {
                path: 'user',
                component: user,
                name: 'user',
                meta: {
                    dataUrl: 'user',
                    pageTitle: 'User',
                    permissionName: 'view_mis_user'
                }
            }

        ]
    },
    {
        path: '*',
        component: notFound
    },
];

export default routes;