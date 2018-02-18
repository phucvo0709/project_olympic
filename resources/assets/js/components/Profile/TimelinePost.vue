<template>
    <div>
        <form class="comment-form inline-items" v-on:submit.prevent="createPost">

            <div class="post__author author vcard inline-items">
                <img :src="authAvatar" alt="author">

                <div class="form-group with-icon-right ">
                    <textarea class="form-control" v-model="content"></textarea>
                    <div class="add-options-message">
                        <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                            <svg class="olymp-camera-icon">
                                <use :href="'/svg-icons/sprites/icons.svg#olymp-camera-icon'"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <button class="btn btn-md-2 btn-primary" type="submit" :disabled="notContent">Post Comment</button>

            <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

        </form>
        <div id="newsfeed-items-grid">
            <vue-post-list></vue-post-list>
        </div>

    </div>
</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        computed: {
            ...mapGetters({
                posts: 'posts',
                authAvatar: 'authAvatar'
            }),
        },
        data() {
            return {
                content: null,
                notContent: true,
            }
        },
        watch: {
            content() {
                if(this.content.length > 0){
                    this.notContent = false
                }else{
                    this.notContent = true
                }
            }
        },
        methods: {
            createPost: function(){
                this.$store.dispatch('addPost', this.content)
                this.notContent = true
                this.content = ''
            },
            moment: function () {
                return moment();
            }
        },
        filters: {
            moment: function (date) {
                return moment(date).startOf().fromNow();
            }
        },
        components: {
            'vue-post-list': require('./TimelinePostList')
        }
    }

</script>

<style scoped>

</style>