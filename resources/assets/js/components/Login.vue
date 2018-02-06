<template>
    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">

        <!-- Login-Registration Form  -->

        <div class="registration-login-form">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#login" role="tab">
                        <svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#register" role="tab">
                        <svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <login-form></login-form>
                <register-form></register-form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        components: {
            'login-form': require('./Login/Login'),
            'register-form': require('./Login/Register')
        }
    }
</script>
