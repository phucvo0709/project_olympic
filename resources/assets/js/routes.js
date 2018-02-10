import profileAbout from './components/Profile/About'
import profileFriends from './components/Profile/Friends'
import profilePhotos from './components/Profile/Photos'
import profileTimeline from './components/Profile/Timeline'
import profileVideos from './components/Profile/Videos'
import profileAvatar from './components/Profile/EditAvatar'

export const routes = [
    { path: '/timeline/:slug', component: profileTimeline, name: 'timeline' },
    { path: '/profile/:slug/about', component: profileAbout, name: 'about' },
    { path: '/profile/:slug/friends', component: profileFriends, name: 'friends' },
    { path: '/profile/:slug/photos', component: profilePhotos, name: 'photos' },
    { path: '/profile/:slug/videos' , component: profileVideos, name: 'videos' },
    { path: '/profile/:slug/avatar' , component: profileAvatar, name: 'avatar' }
]