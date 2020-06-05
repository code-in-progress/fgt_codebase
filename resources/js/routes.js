import cIndex from './views/categories/index';
import cShow from './views/categories/show';
import cCreate from './views/categories/create';
import cEdit from './views/categories/edit';
import pIndex from './views/posts/index';
import pShow from './views/posts/show';
import pCreate from './views/posts/create';
import pEdit from './views/posts/edit';

import Home from './views/home';


export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/categories',
            component: cIndex
        },
        {
            path: '/categories/create',
            component: cCreate
        },
        {
            path: '/categories/{category}',
            component: cShow
        },
        {
            path: '/categories/{category}/edit',
            component: cEdit
        },
        {
            path: '/posts',
            component: pIndex
        },
        {
            path: '/posts/create',
            component: pCreate
        },
        {
            path: '/posts/{post}',
            component: pShow
        },
        {
            path: '/posts/{post}/edit',
            component: pEdit
        }
    ]
}
