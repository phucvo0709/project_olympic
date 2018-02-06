import profileAbout from './components/Profile/About'
import profileFriends from './components/Profile/Friends'
import profilePhotos from './components/Profile/Photos'
import profileTimeline from './components/Profile/Timeline'
import profileVideos from './components/Profile/Videos'
import profileAvatar from './components/Profile/EditAvatar'

export const routes = [
    { path: '/timeline/:slug', component: profileTimeline },
    { path: '/profile/:slug/about', component: profileAbout },
    { path: '/profile/:slug/friends', component: profileFriends },
    { path: '/profile/:slug/photos', component: profilePhotos },
    { path: '/profile/:slug/videos' , component: profileVideos },
    { path: '/profile/:slug/avatar' , component: profileAvatar }
]