import { createApp } from "vue";
import parent from "./components/base.vue";

const app = createApp({});
app.component("parent", parent).mount("#app");

require("./bootstrap");
