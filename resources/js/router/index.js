import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Layout from '../layout';

// import adminRoutes from './modules/admin';
import userRoutes from './modules/user';
import errorRouter from './modules/ErrorPage';

export const constantRoutes = [
  {
    path: '/redirect',
    component: Layout,
    redirect: { name: 'redirect' },
    hidden: true,
    children: [
      {
        path: '/redirect/:path*',
        component: () => import('@/views/Redirect/index'),
        name: 'redirect',
        roles: ['admin'],
      },
      {
        path: '/dashboard/profile',
        component: () => import('@/views/Profile/index'),
        name: 'Profile',
        meta: {
          title: 'profile.title',
        },
        hidden: true,
      },
    ],
  },
  {
    path: '/login',
    component: () => import('@/views/Login/index'),
    name: 'Login',
    meta: {
      title: 'routes.login',
    },
    hidden: true,
  },
  {
    path: '/',
    name: 'Dashboard',
    redirect: '/homepage',
    meta: {
      title: 'routes.dashboard',
      icon: 'icofont-dashboard-web',
      permissions: ['view menu administrator'],
    },
  },
  {
    path: '/tags',
    name: 'Tag',
    component: Layout,
    children: [
      {
        path: 'index',
        alias: '/tags',
        component: () => import('@/views/Tag/index'),
        meta: {
          title: 'routes.tag',
          icon: 'icofont-tag',
          permissions: ['view menu administrator'],
        },
      },
    ],
  },
  {
    path: '/categories',
    name: 'Categories',
    component: Layout,
    children: [
      {
        path: 'index',
        alias: '/categories',
        component: () => import('@/views/Categories/index'),
        meta: {
          title: 'routes.categories',
          icon: 'icofont-listing-box',
          permissions: ['view menu administrator'],
        },
      },
    ],
  },
  {
    path: '/post',
    name: 'Post',
    component: Layout,
    children: [
      {
        path: 'index',
        alias: '/post',
        component: () => import('@/views/Post/index'),
        meta: {
          title: 'routes.post',
          icon: 'icofont-blogger',
          permissions: ['view menu administrator'],
        },
      },
    ],
  },
  {
    path: '/hompage',
    name: 'HomePage',
    component: Layout,
    children: [
      {
        path: 'index',
        alias: '/homepage',
        component: () => import('@/views/HomePage/index'),
        meta: {
          title: 'routes.homePage',
          icon: 'icofont-home',
        },
      },
    ],
  },
  {
    path: '/dashboard',
    redirect: 'dashboard/index',
    component: Layout,
    hidden: true,
    children: [
      {
        path: 'index',
        alias: '/dashboard',
        component: () => import('@/views/Dashboard/index'),
        meta: {
          title: 'routes.dashboard',
          icon: 'dashboard',
          permissions: ['view menu user'],
        },
      },
    ],
  },
  {
    path: '/404',
    redirect: { name: 'Page404' },
    component: () => import('@/views/ErrorPage/Page404'),
    hidden: true,
  },
];

export const asyncRoutes = [
  //  adminRoutes,
  userRoutes,
  errorRouter,
  {
    path: '*',
    redirect: { name: 'Page404' },
    hidden: true,
  },
];

const createRouter = () => new VueRouter({
  scrollBehavior: () => ({ y: 0 }),
  base: process.env.MIX_LARAVUE_PATH,
  routes: constantRoutes,
});

const router = createRouter();

export function resetRouter() {
  const newRouter = createRouter();
  router.matcher = newRouter.matcher; // Reset router
}

export default router;
