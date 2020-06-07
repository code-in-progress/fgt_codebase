<template>
    <div>Home</div>
    <!-- <div class="message" v-for="p in posts">
        <div class="message-header">
            <p>
                {{ p.title }}
            </p>
        </div>
    </div>-->
</template>

<script>
    export default {
        mounted() {
            console.log("Home component loaded");
        },

        data() {
            return data;
        },

        created() {
            axios.get('/api/categories')
                .then(({data}) => this.categories = data);

            axios.get('/api/posts')
                .then(({data}) => this.posts = data);
        }
    }
</script>
