<template>
    <div class="container">
        <h3>Friend Pending</h3>

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6" v-if="!pendingFriends[0]">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img :src="'/img/friend8.jpg'" alt="friend">
                        </div>

                        <div class="friend-item-content">
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img :src="'/img/avatar8.jpg'" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">No Friend Pending</a>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">58</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">304</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">19</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-happy-face-icon'"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-chat---messages-icon'"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6" v-for="pendingFriend in pendingFriends" v-else>
                <div class="ui-block">
                    <!-- Friend Item -->
                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img style="max-width: 293px; max-height: 112.4px;" :src="'/img/friend1.jpg'" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img style="max-width:100px; max-height:100px" :src="pendingFriend.avatar" alt="author">
                                </div>
                                <div class="author-content">
                                    <router-link :to="{ name: 'about' , params: { slug: pendingFriend.slug } }" class="h5 author-name">{{pendingFriend.name}}</router-link>
                                </div>
                            </div>

                            <div class="swiper-container" data-slide="fade">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a class="friend-count-item">
                                                <div class="title" v-if="pendingFriend.gender = 1">Male</div>
                                                <div class="title" v-else>Female</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-happy-face-icon'"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-chat---messages-icon'"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->
                </div>
            </div>
        </div>
        <vue-paginate></vue-paginate>
        <h3>All Friend</h3>
    </div>

    <!-- Friends -->


    <!-- ... end Friends -->
</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        mounted: function(){
            this.$store.dispatch('getpendingFriends')
        },
        computed:{
            ...mapGetters({
                pendingFriends: 'penddingFriends',
            })
        },
        components: {
            'vue-paginate': require('./FriendPaginate')
        },
        data() {
            return {
                slug: this.$route.params.slug,
            }
        }
    }
</script>
<style>
</style>