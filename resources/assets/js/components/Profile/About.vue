<template>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Hobbies and Interests</h6>
                        <a href="#" class="more">
                            <svg class="olymp-three-dots-icon">
                                <use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Hobbies:</span>
                                        <span class="text">I like to ride the bike to work, swimming, and working out. I also like
    reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.
    </span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite TV Shows:</span>
                                        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Movies:</span>
                                        <span class="text">Idiocratic, The Scarred Wizard and the Fire Crown,  Crime Squad, Ferrum Man. </span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Games:</span>
                                        <span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto. </span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Favourite Music Bands / Artists:</span>
                                        <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Books:</span>
                                        <span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Writers:</span>
                                        <span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </span>
                                    </li>
                                    <li>
                                        <span class="title">Other Interests:</span>
                                        <span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Education and Employement</h6>
                        <a href="#" class="more">
                            <svg class="olymp-three-dots-icon">
                                <use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">The New College of Design</span>
                                        <span class="date">2001 - 2006</span>
                                        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                    </li>
                                    <li>
                                        <span class="title">Rembrandt Institute</span>
                                        <span class="date">2008</span>
                                        <span class="text">Five months Digital Illustration course. Professor: Leonardo Stagg.</span>
                                    </li>
                                    <li>
                                        <span class="title">The Digital College </span>
                                        <span class="date">2010</span>
                                        <span class="text">6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle. </span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Digital Design Intern</span>
                                        <span class="date">2006-2008</span>
                                        <span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>
                                    </li>
                                    <li>
                                        <span class="title">UI/UX Designer</span>
                                        <span class="date">2008-2013</span>
                                        <span class="text">UI/UX Designer for the “Daydreams” agency. </span>
                                    </li>
                                    <li>
                                        <span class="title">Senior UI/UX Designer</span>
                                        <span class="date">2013-Now</span>
                                        <span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Personal Info</h6>
                        <a data-toggle="modal" data-target="#modalUpdateProfile" href="#" class="btn btn-breez btn-sm" style="display: block"
                        v-if="check == true">Edit</a>
                    </div>
                    <div class="ui-block-content">


                        <!-- W-Personal-Info -->

                        <ul class="widget w-personal-info">
                            <li>
                                <span class="title">About Me:</span>
                                <span class="text" v-if="profile.about != ''">{{ profile.about }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Birthday:</span>
                                <span class="text" v-if="profile.birthDay != ''">{{ profile.birthDay }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Birthplace:</span>
                                <span class="text" v-if="birthPlace != ''">{{ profile.birthPlace }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Lives in:</span>
                                <span class="text" v-if="profile.liveIn != ''">{{ profile.liveIn }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Occupation:</span>
                                <span class="text" v-if="profile.occupation != ''">{{ profile.occupation }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Joined:</span>
                                <span class="text" v-if="user.created_at != ''">{{ user.created_at }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Gender:</span>
                                <span class="text" v-if="user.gender == 1">Male</span>
                                <span class="text" v-else-if="user.gender == 0">Male</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <a href="#" class="text" v-if="user.email != ''">{{ user.email }}</a>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>

                            <li>
                                <span class="title">Phone Number:</span>
                                <span class="text" v-if="profile.phoneNumber != ''">{{ profile.phoneNumber }}</span>
                                <span class="text" v-else>{{ empty }}</span>
                            </li>
                        </ul>
                        <!-- ... end W-Personal-Info -->
                    </div>
                </div>
            </div>
        </div>
        <edit-form :profile="profile" @profileUpdated="profile = $event"></edit-form>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                user: '',
                profile: '',
                empty: 'empty',
                slug: this.$route.params.slug,
                check: false,
            }
        },
        created() {
            axios.get(`/apigetprofile/${this.slug}`)
                .then(resp =>{
                    this.user = resp.data[0][0],
                        this.profile = resp.data[1][0],
                        this.check = resp.data[2]
                })
        },
        components:{
            'edit-form': require('./EditProfile')
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
