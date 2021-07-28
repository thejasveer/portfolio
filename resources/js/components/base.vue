<template>
<sorting-visualizer />
</template>

<script>
    import SortingVisualizer from "./sorting-visualizer.vue";
    export default {
        name: "base",
        setup: () => ({

            greeting: 'Hello Worddld f rom Vue 3!a'
        }),
        components: {
            SortingVisualizer,
        },
    }
</script>

<style scoped>

</style>
