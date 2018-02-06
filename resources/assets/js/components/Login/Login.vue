<template>
    <div class="tab-pane active" id="login" role="tabpanel" data-mh="log-tab">
        <div class="title h6">Login to your Account</div>

            <ul class="alert" :class="[(success) ? 'alert-success' : 'alert-danger']" v-if="alertSuccess != null || alertError != null">
                <p class="text-center">
                    <span v-if="alertSuccess">{{alertSuccess}}</span>
                    <span v-else> {{alertError}}</span>
                </p>
            </ul>
        <form v-on:submit.prevent="attemptLogin()">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input class="form-control" placeholder="Your Email" name="email" type="email" v-model="email">
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input class="form-control" placeholder="Your Password" name="password" type="password" v-model="password">
                    </div>
                </div>
                <button class="btn btn-lg btn-primary full-width" type="submit" :disabled="!validLoginForm">Login</button>
                <div class="title"><a href="/password/reset">Reset Password</a></div>
            </div>
        </form>
    </div>
</template>

<script>

    import axios from 'axios';

    export default {
        data() {
            return {
                email: '',
                password: '',
                slug: '',
                loading: false,
                success: false,
                alertSuccess : null,
                alertError: null
            }
        },
        methods: {
            emailValid() {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
                {
                    return true;
                }else{
                    return false;
                }
            },
            attemptLogin(){
                this.loading = true;
                this.errors = [];
                axios.post('/login', {
                    email: this.email,
                    password: this.password
                }).then(resp => {
                    this.success = true,
                    this.alertSuccess = 'Login successfully waits for a moment',
                    axios.get(`/user/${this.email}`)
                        .then(resp => {
                            this.slug = resp.data[0][0].slug
                            location.href = `/timeline/${this.slug}/`
                        })
                }).catch(error => {
                    this.loading = false,
                    this.alertError = "User or Password not invailid";
                })

            }
        },
        computed: {
            validLoginForm(){
                return this.emailValid() && this.password && !this.loading
            }
        }
    }
</script>

<style scoped>

</style>