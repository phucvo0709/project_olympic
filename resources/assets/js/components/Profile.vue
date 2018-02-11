<template>
    <div>
        <vue-header></vue-header>
            <transition appear leave-active-class="animated lightSpeedOut">
                <router-view></router-view>
            </transition>
        <vue-chat></vue-chat>
    </div>
</template>

<script>
    export default {
        components: {
            'vue-header': require('./Profile/Header'),
            'vue-chat': require('./Profile/Chat')
        }
    }
</script>