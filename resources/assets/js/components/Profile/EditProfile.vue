<template>
    <div>
        <div class="modal fade" id="modalUpdateProfile">
            <div class="modal-dialog ui-block window-popup popup-write-rewiev">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-close-icon'"></use></svg>
                </a>

                <div class="ui-block-title">
                    <h6 class="title">Write a Review</h6>
                </div>

                <form class="form-write-rewiev" v-on:submit.prevent="updateProfile()">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">About me</label>
                                <textarea class="form-control" name="about" v-model="profile.about"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group date-time-picker label-floating">
                                <label class="control-label">Your Birthday</label>
                                <input name="datetimepicker birthDay" v-model="profile.birthDay"/>
                                <span class="input-group-addon">
                                    <svg class="olymp-calendar-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-calendar-icon'"></use></svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" style="position: unset">Birth Place</label>
                                <input class="form-control" placeholder="Birth Place" name="birthPlace" type="text" v-model="profile.birthPlace">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" style="position: unset"> Live In </label>
                                <input class="form-control" placeholder="Live In" name="liveIn" type="text" v-model="profile.liveIn">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" style="position: unset">Occupation</label>
                                <input class="form-control" placeholder="Occupation" name="occupation" type="text" v-model="profile.occupation">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" style="position: unset">Phone Number</label>
                                <input class="form-control" placeholder="Phone Number" name="phoneNumber" type="text" v-model="profile.phoneNumber">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg full-width">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['profile'],

        methods: {
            updateProfile(){
                let profile = this.profile
                axios.put('/updateprofile', profile)
                    .then(resp => {
                        $('#modalUpdateProfile').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }
    }
</script>

<style scoped>

</style>