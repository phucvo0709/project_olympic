<template>
<div class="tab-pane active" id="login">
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
            <button class="btn btn-lg btn-primary full-width" type="submit" :disabled="loading">Login</button>
            <div class="title"><router-link :to="{name: 'forgot'}" tag="a">Reset Password</router-link></div>
            <div class="or"></div>
            <a href="/login/facebook" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>
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
                success: false,
                alertSuccess : null,
                alertError: null,
                loading: false,
            }
        },
        methods: {
            attemptLogin: function(){
                this.loading = true
                axios.post('/login', {
                    email: this.email,
                    password: this.password
                }).then(resp => {
                    this.alertError = '',
                    this.success = true,
                    this.alertSuccess = 'Login successfully waits for a moment',
                    location.href = `/timeline`
                }).catch(error => {
                    this.loading = false
                    this.alertError = "User or Password not invailid";
                })
            }
        },
        computed: {
        }
    }
</script>
