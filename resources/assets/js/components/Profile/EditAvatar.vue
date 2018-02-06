<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <div class="ui-block-title">
                            <h6 class="title">Setting Avatar</h6>
                        </div>
                        <div class="ui-block-content">
                            <!-- Personal Account Settings Form -->
                            <form v-on:submit.prevent="updateAvatar()" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img style="display:block; margin:0 auto; padding: 20px; width:200px; height:200px"
                                             class="img-responsive"
                                             :src="avatar">
                                    </div>
                                    <input type="file" name="image" @change="getImage">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-lg full-width">Save setting</button>
                                    </div>
                                </div>
                            </form>

                            <!-- ... end Personal Account Settings Form  -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                user: '',
                check: '',
                avatar: '',
                slug: this.$route.params.slug,
            }
        },
        created() {
            axios.get(`/apigetprofile/${this.slug}`)
                .then(resp =>{
                    this.user = resp.data[0][0],
                    this.check = resp.data[2],
                        this.avatar = this.user.avatar
                })
        },
        methods: {
            getImage(e){
                let image = e.target.files[0];
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    this.avatar = e.target.result
                }
            },
            updateAvatar(){
                let avatar = this.avatar
                axios.post('/updateavatar', {
                    'avatar': avatar
                    })
                    .then(resp => {
                        swal(resp.data);
                    })
            }
        }
    }
</script>

<style scoped>

</style>