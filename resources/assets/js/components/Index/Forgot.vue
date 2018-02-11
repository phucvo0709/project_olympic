<template>
    <div class="tab-pane active" id="forgot">
        <div class="title h6">Forgot Password</div>
        <ul class="alert" :class="[(status === 'Please wait') ? 'alert-success': (success) ? 'alert-success' : 'alert-danger']" v-if="status != null">
            <p class="text-center">
                <span>{{status}}</span>
            </p>
        </ul>
        <form v-on:submit.prevent="sendEmail">
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Your Email" v-model="email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-offset-4">
                    <button type="submit" class="btn btn-primary" :disabled="loading">
                        Send Password Reset Link
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: null,
            status: null,
            success: false,
            loading: false
        }
    },
    methods: {
        sendEmail: function(){
            this.loading = true;
            this.status = "Please wait";
            axios.post('/password/email', {
                email: this.email
            }).then(resp => {
                let data = resp.data[0]
                let check = resp.data[1]
                if(check === true){
                    this.success = true
                    this.status = data
                }else{
                    this.loading = false
                    this.success = false
                    this.status = data
                }
            })
        }
    }
}
</script>
