import { reactive, readonly, ssrContextKey } from "vue";

const state = reactive({
    grid: [],
});
const methods = {
    setGrid(val) {
        state.grid = val;
    },
};

export default {
    state: readonly(state),
    methods,
};
