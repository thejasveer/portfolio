import { reactive, readonly, ssrContextKey } from "vue";

const state = {
    grid: [],
};
const methods = {
    setGrid(val) {
        state.grid = val;
    },
};

export default {
    state: state,
    methods,
};
