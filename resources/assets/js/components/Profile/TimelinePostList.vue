<template>
    <div>
        <div class="ui-block" v-for="post in posts">
            <!-- Post -->

            <article class="hentry post">

                <div class="post__author author vcard inline-items">
                    <img :src="post.user.avatar" alt="author">

                    <div class="author-date">
                        <a class="h6 post__author-name fn" :href="`/profile/` + post.user.slug + `/about`">{{post.user.name}}</a>
                        <div class="post__date">
                            <time class="cw-relative-date" datetime="">
                                <span>{{ post.created_at | moment }}</span>
                            </time>
                        </div>
                    </div>

                    <div class="more">
                        <svg class="olymp-three-dots-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use>
                        </svg>
                        <ul class="more-dropdown">
                            <li>
                                <a href="#">Edit Post</a>
                            </li>
                            <li>
                                <a href="#">Delete Post</a>
                            </li>
                            <li>
                                <a href="#">Turn Off Notifications</a>
                            </li>
                            <li>
                                <a href="#">Select as Featured</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <p>{{post.content}}</p>

                <div class="post-additional-info inline-items">

                    <a href="#" class="post-add-icon inline-items">
                        <svg class="olymp-heart-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-heart-icon'"></use>
                        </svg>
                        <span>8</span>
                    </a>

                    <ul class="friends-harmonic">
                        <li>
                            <a href="#">
                                <img :src="'/img/friend-harmonic7.jpg'" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img :src="'/img/friend-harmonic8.jpg'" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img :src="'/img/friend-harmonic9.jpg'" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img :src="'/img/friend-harmonic10.jpg'" alt="friend">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img :src="'/img/friend-harmonic11.jpg'" alt="friend">
                            </a>
                        </li>
                    </ul>

                    <div class="names-people-likes">
                        <a href="#">Jenny</a>, <a href="#">Robert</a> and
                        <br>6 more liked this
                    </div>


                    <div class="comments-shared">
                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-speech-balloon-icon">
                                <use :href="'/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon'"></use>
                            </svg>
                            <span>17</span>
                        </a>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-share-icon">
                                <use :href="'/svg-icons/sprites/icons.svg#olymp-share-icon'"></use>
                            </svg>
                            <span>24</span>
                        </a>
                    </div>


                </div>

                <div class="control-block-button post-control-button">

                    <a href="#" class="btn btn-control featured-post">
                        <svg class="olymp-trophy-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-trophy-icon'"></use>
                        </svg>
                    </a>

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-like-post-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-like-post-icon'"></use>
                        </svg>
                    </a>

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-comments-post-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-comments-post-icon'"></use>
                        </svg>
                    </a>

                    <a href="#" class="btn btn-control">
                        <svg class="olymp-share-icon">
                            <use :href="'/svg-icons/sprites/icons.svg#olymp-share-icon'"></use>
                        </svg>
                    </a>

                </div>

            </article>

            <!-- .. end Post -->
        </div>
        <infinite-loading @infinite="infiniteHandler">
            <span slot="no-more">No More</span>
            <span slot="no-results">123</span>
        </infinite-loading>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import InfiniteLoading from 'vue-infinite-loading'
    export default {
        components: {
            InfiniteLoading,
        },
        mounted(){
            this.$store.dispatch('getPosts')
        },
        computed: {
            ...mapGetters({
                posts: 'posts',
            }),
        },
        methods: {
            moment: function () {
                return moment();
            },
            infiniteHandler($state) {
                setTimeout(() => {
                    for (let i = this.posts.length + 1; i <= this.posts.length + 5; i++) {
                        this.$store.dispatch('getPostsLimit', i)
                    }
                    $state.loaded();
                }, 1000);
            },
        },
        filters: {
            moment: function (date) {
                return moment(date).startOf().fromNow();
            }
        },
    }
</script>