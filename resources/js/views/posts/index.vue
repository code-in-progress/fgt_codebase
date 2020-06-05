<template>
    <main>
        <div class="columns">
            <div class="column">
                <div class="flex-center position-ref full-height">
                    <ul>
                        @foreach($categories as $c)
                        <li>
                            <div>Name: {{ $c->category_name }}</div>
                            <div>ID: {{ $c->id }}</div>
                            <hr />
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        mounted() {
            console.log("Categories component loaded");
        }
    }
</script>
