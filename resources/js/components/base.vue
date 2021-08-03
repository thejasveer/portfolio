<template>
    <a href="/" class="text-white">Back</a>
<sorting-visualizer v-if="type == 'SortingVisualizer'"/>
<path-finder v-else/>
</template>

<script>
    import SortingVisualizer from "./sorting-visualizer.vue";
    import PathFinder from "./Path-Finder/path-finder.vue";
    export default {
        name: "base",
        props:['type'],
        setup: () => ({
            greeting: 'Hello Worddld f rom Vue 3!a'
        }),
        components: {
            SortingVisualizer,
            PathFinder
        },
    }
</script>

<style scoped>

</style>
