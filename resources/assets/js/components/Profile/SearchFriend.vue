<template>
<div>
    <form class="search-bar w-search notification-list friend-requests">
        <div class="form-group with-button is-empty">
            <div class="selectize-control form-control js-user-search multi">
                <div class="selectize-input items not-full has-options input-active dropdown-active">
                    <input
                            type="text" autocomplete="off" tabindex=""
                            placeholder="Pc search"
                            style="width: 229.863px; opacity: 1; position: relative; left: 0px;"
                            v-model="key" @keyup="findFriend">
                </div>
                <div class="selectize-dropdown multi form-control js-user-search"
                     style="display: none; width: 500px; top: 70px; left: 0px; visibility: visible;"
                        >

                        <div class="selectize-dropdown-content" v-for="friend in friendSearch">
                            <a :href="'/profile/'+ friend.slug +'/about'" @click="hide">
                                <div class="author-thumb">
                                    <img style="width:42px; height:42px" :src="friend.avatar" alt="avatar">
                                </div>
                                <div class="notification-event">
                                    <span class="h6 notification-friend">{{friend.name}}</span>
                                    <span class="chat-message-item">Hello</span>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
            <button>
                <svg class="olymp-magnifying-glass-icon">
                    <use :href="'/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon'"></use>
                </svg>
            </button>
        </div>
    </form>
</div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        computed: {
            ...mapGetters({
                friendSearch: 'friendSearch'
            })
        },
        data (){
            return {
                key: ''
            }
        },
        methods: {

            hide: function(){
                $('.selectize-dropdown').css('display', 'none')
            },
            findFriend: function(){
                let dropdown = $('.selectize-dropdown');
                dropdown.css('display', 'block')
                dropdown.mouseleave(function () {
                    dropdown.css('display', 'none')
                })
                if(this.key.length === 0){
                    this.$store.commit('GET_FRIENDSEARCH', [])
                }
                else if(this.key.length > 2){
                    this.$store.dispatch('getFriendSearch', this.key)
                }
            },
        }
    }
</script>
