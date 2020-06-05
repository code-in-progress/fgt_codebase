<template>
    <h1>Welcome user (or non-user)!!!</h1>
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
            axios.get('/categories')
                .then(({data}) => this.categories = response.data);
        }
    }
</script>
