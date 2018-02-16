<template>

        <div class="control-icon more has-items" style="display:block">
            <svg class="olymp-happy-face-icon">
                <use :href="'/svg-icons/sprites/icons.svg#olymp-happy-face-icon'"></use>
            </svg>
            <div class="label-avatar bg-blue">{{numberPendingTo}}</div>

            <div class="more-dropdown more-with-triangle triangle-top-center">
                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">FRIEND REQUESTS</h6>
                    <a href="#">Find Friends</a>
                    <a href="#">Settings</a>
                </div>

                <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark"
                     data-ps-id="13cea887-6672-7b94-6d29-420177e7e512">
                    <ul class="notification-list friend-requests">
                        <li v-for="data in pendingToList">
                            <div class="author-thumb">
                                <img :src="data.avatar" style="max-width: 34px; max-height:34px" alt="author">
                            </div>
                            <div class="notification-event">
                                <a :href="`/profile/${data.slug}/about`" class="h6 notification-friend">{{data.name}}</a>
                            </div>
                            <span class="notification-icon">
									<a @click="addFriendBar(data.id)" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use
                                                    :href="'/svg-icons/sprites/icons.svg#olymp-happy-face-icon'"></use></svg>
										</span>
									</a>
                        </span>
                        </li>
                    </ul>
                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__scrollbar-y-rail" style="top: 0px; height: 300px; right: 0px;">
                        <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 241px;"></div>
                    </div>
                </div>

                <a href="#" class="view-all bg-blue">Check all your Events</a>
            </div>
        </div>

</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        mounted() {
            this.$store.dispatch('getPendingToList')
        },
        computed: {
            ...mapGetters({
                numberPendingTo: 'numberPendingTo',
                pendingToList: 'pendingToList'
            })
        },
        methods: {
            addFriendBar: function(userId){
                this.$store.dispatch('addFriendBar', userId)
            },
        }
    }
</script>

<style scoped>

</style>