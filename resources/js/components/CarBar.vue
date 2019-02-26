<template>
    <div class="bar" >
        <barleft></barleft>
        <bar-right></bar-right>
    </div>
</template>

<script>

    import Barleft from './BarLeft.vue';
    import BarRight from './BarRight.vue';

    export default {
        components: {
            Barleft,
            BarRight
        }
    }

</script>

<style scoped>
    .bar{
        display: flex;
    }
</style>
