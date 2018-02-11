<template>
    <div class="tab-pane active" id="register">
        <div class="title h6">Register to Olympus</div>
        <ul class="alert" :class="{'alert-success': alertSuccess != null }" v-if="alertSuccess != null">
            <p class="text-center">
                <span>{{alertSuccess}}</span>
            </p>
        </ul>
        <form class="content" v-on:submit.prevent="attemptRegister()">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group label-floating is-empty">
                        <label for="name" class="col-md-4 control-label"></label>
                        <input id="name" type="text" class="form-control" name="name" placeholder="Full Name"
                               v-model="name" :class="{'is-danger': errors.name }">
                        <small v-if="errors.name" class="has-text-danger">{{errors.name[0]}}</small>
                    </div>
                    <div class="form-group label-floating is-empty invalid">
                        <label for="email" class="control-label"></label>
                        <input class="form-control" placeholder="Your Email" id="email" name="email"
                               v-model="email" :class="{'is-danger': errors.email }" type="email">
                        <small v-if="errors.email" class="has-text-danger">{{errors.email[0]}}</small>
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label for="password" class="control-label"></label>
                        <input class="form-control" placeholder="Your Password" id="password" name="password"
                               v-model="password" :class="{'is-danger': errors.password}" type="password">
                        <small v-if="errors.password" class="has-text-danger">{{errors.password[0]}}</small>

                    </div>
                    <div class="form-group label-floating is-select">
                        <label for="gender" class="control-label">Your Gender</label>
                        <select id="gender" name="gender" class="form-control" v-model="gender">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>


    export default {
        data() {
            return {
                name: '',
                email: '',
                password: '',
                gender: 1,
                loading: false,
                slug: '',
                alertSuccess: null,
                errors: {}
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
            attemptRegister() {
                this.loading = true,
                    axios.post('/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        gender: this.gender
                    }).then(resp => {
                        this.alertSuccess = 'Register successfully waits for a moment'
                        location.href = `/timeline`
                    })
            }
        }
    }
</script>
<style scoped>
    select.form-control:not([size]):not([multiple]) {
        height: calc(3.25rem + 2px) ;
    }
</style>