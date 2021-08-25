import { createApp } from "vue";
import test from "./components/test.vue";
import parent from "./components/base.vue";
import SortingVisualizer from "./components/sorting-visualizer.vue";

const app = createApp({});
app.component("parent", parent).mount("#app");

require("./bootstrap");
