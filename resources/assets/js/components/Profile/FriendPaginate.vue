<template>
<div class="text-center" v-show="total !== 0">
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link"
                   @click="actionPagination(firstPageUrl)" v-show="currentPage != 1">First</a>
            </li>
            <li class="page-item">
                <a class="page-link"
                   @click="actionPagination(prevPageUrl)" :disabled="prevPageUrl == null"
                   v-show="currentPage != 1">Prev</a>
            </li>
            <li class="page-item" v-for="page in totalPageArr">
                <a class="page-link" :class="(currentPage === page) ? 'disabled' : ''"
                   @click="actionPaginationParams(urlPagination, page)" :disabled="currentPage === page">{{page}}</a>
            </li>
            <li class="page-item">
                <a class="page-link" :class="(nextPageUrl == null) ? 'disabled' : ''"
                   @click="actionPagination(nextPageUrl)"
                   :disabled="nextPageUrl == null" v-show="to !== total">Next</a>
            </li>
            <li class="page-item">
                <a class="page-link" @click="actionPagination(lastPageUrl)" v-show="to !== total">Last</a>
            </li>
        </ul>
    </div>
    <p>watch from {{from}} to {{to}} total {{total}} friend pending request</p>
</div>
</template>

<script>
    import {mapGetters} from 'vuex'
    export default {
        computed:{
            ...mapGetters({
                from: 'from',
                to: 'to',
                total: 'total',
                firstPageUrl: 'firstPageUrl',
                prevPageUrl: 'prevPageUrl',
                currentPage: 'currentPage',
                nextPageUrl: 'nextPageUrl',
                lastPageUrl: 'lastPageUrl',
                totalPageArr: 'totalPageArr'
            })
        },
        data (){
            return {
                urlPagination: '/api/getpendingrequest?page=',
            }
        },
        methods: {
            actionPagination: function(sendUrl){
                this.$store.dispatch('getActionPagination', sendUrl)
            },
            actionPaginationParams: function(baseUrl, param){
                let url = baseUrl + param
                this.$store.dispatch('getActionPagination', url)
            }
        }
    }
</script>

<style scoped>
    .page-link{
        color: #ff5e3a !important;
    }
    .page-link:hover{
        color: white !important;
    }
    .disabled{
        color: #3c4d58 !important;
    }

</style>