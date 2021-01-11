<style>
    .container-fluid{
        width: 80%;
    }
</style>
<template>
    <div>
        <slider-comp></slider-comp>
        <div class="container-fluid">
            <section-comp></section-comp>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
