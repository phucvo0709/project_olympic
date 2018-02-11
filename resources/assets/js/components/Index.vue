<template>
    <div>
        <vue-header></vue-header>
        <div class="container">
            <div class="row display-flex">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="landing-content">
                        <h1>Welcome to the Biggest Social Network in the World</h1>
                        <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                            thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                        </p>
                        <router-link :to="{name: 'register'}" tag="a" class="btn btn-md btn-border c-white" v-if="slug === 'login'">Register Now!</router-link>
                        <router-link :to="{name: 'login'}" tag="a" class="btn btn-md btn-border c-white" v-else>Login Now!</router-link>

                    </div>
                </div>

                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="registration-login-form">
                        <div class="tab-content">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            document.body.className = "landing-page";
        },
        computed: {
            slug(){
                return this.$route.name;
            }
        },
        components: {
            'vue-header': require('./Index/Header')
        }
    }
</script>
<style>
    .registration-login-form{
        padding: 30px 30px 30px 30px !important;
    }
    .landing-page .header-spacer--standard{
        margin: 0px;
    }
</style>