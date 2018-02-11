import login from './components/Index/Login'
import register from './components/Index/Register'
import forgot from './components/Index/Forgot'
import reset from './components/Index/Reset'

import profileAbout from './components/Profile/About'
import profileFriends from './components/Profile/Friends'
import profilePhotos from './components/Profile/Photos'
import profileTimeline from './components/Profile/Timeline'
import profileVideos from './components/Profile/Videos'
import profileAvatar from './components/Profile/EditAvatar'

export const routes = [
    { path: '/', component: login, name: 'index' },
    { path: '/login', component: login, name: 'login', meta: { title: 'Olympic - Login' }},
    { path: '/register', component: register, name: 'register', meta: { title: 'Olympic - Register' } },
    { path: '/forgot', component: forgot, name: 'forgot', meta: { title: 'Olympic - Forget Password' } },
    { path: '/reset', component: reset, name: 'reset', meta: { title: 'Olympic - Reset Password' } },

    { path: '/timeline/:slug', component: profileTimeline, name: 'timeline', meta: { title: 'Olympic - Timeline' } },
    { path: '/profile/:slug/about', component: profileAbout, name: 'about', meta: { title: 'Olympic - About' } },
    { path: '/profile/:slug/friends', component: profileFriends, name: 'friends', meta: { title: 'Olympic - Friends' } },
    { path: '/profile/:slug/photos', component: profilePhotos, name: 'photos', meta: { title: 'Olympic - Photos' } },
    { path: '/profile/:slug/videos' , component: profileVideos, name: 'videos', meta: { title: 'Olympic - Videos' } },
    { path: '/profile/:slug/avatar' , component: profileAvatar, name: 'avatar', meta: { title: 'Olympic - Avatar' } }
]
