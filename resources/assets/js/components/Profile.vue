<template>
    <transition appear leave-active-class="animated lightSpeedOut">
        <router-view></router-view>
    </transition>
</template>

<script>
    export default {
        components: {

        }
    }
</script>

<style scoped>

</style>