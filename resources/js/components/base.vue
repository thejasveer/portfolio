<template>
  <!-- <a href="/" class="text-white">Back</a> -->
  <sorting-visualizer v-if="type == 'SortingVisualizer'" />
  <path-finder v-else />
</template>

<script>
import SortingVisualizer from "./Sorting-Visualizer/sorting-visualizer.vue";
import PathFinder from "./Path-Finder/path-finder.vue";
import pathfinderStore from "./pathfinderStore";
import { provide } from "vue";
export default {
  name: "base2",
  props: ["type"],

  components: {
    SortingVisualizer,
    PathFinder,
  },
};
</script>
 
<style scoped>
</style>
