<template>
  <div class="h-full w-full">
    <div
      :class="extraClassName"
      @mouseenter="onMouseEnter"
      @mousedown="onMouseDown"
      v-on:mouseup="onMouseUp"
      class="flex justify-center items-center h-full w-full"
      :id="'node_' + value.row + '_' + value.col"
    >
      <svg
        v-if="isStart"
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10 animate-pulse"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
          clip-rule="evenodd"
        />
      </svg>
      <!-- <img v-if="isStart" src="/public/assets/finder.gif" alt="" /> -->
      <svg
        v-if="isFinish"
        xmlns="http://www.w3.org/2000/svg"
        class="h-10 w-10 animate-pulse"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z"
          clip-rule="evenodd"
        />
      </svg>
    </div>
  </div>
</template>

<script>
export default {
  name: "node",
  props: {
    value: Object,
    isStart: Boolean,
    isFinish: Boolean,
  },
  components: {},
  data() {
    return {
      // nodesArray:this.tableNodes
    };
  },
  watch: {
    value(neww, pre) {
      // console.log(neww);
    },
  },
  computed: {
    extraClassName() {
      const { isStart, isFinish, isWall, isVisited } = this.value;

      const cn =
        isFinish == true
          ? "endCls"
          : isStart == true
          ? "startCls"
          : isWall == true
          ? "wall"
          : isVisited == true
          ? "nodeVisited"
          : "";

      return cn;
    },
    onMouseEnter() {
      this.$emit("onMouseEnter", this.value);
    },
    onMouseUp() {
      this.$emit("onMouseUp", this.value);
    },
    onMouseDown() {
      this.$emit("onMouseDown", this.value);
    },
  },

  methods: {},
  mounted() {
    // console.log(this.value);
  },
};
</script>

<style scoped>
.startCls {
  color: yellow;
  cursor: grabbing;
  animation: strClr 3s;
}

@keyframes strClr {
  from {
    color: white;
  }
  to {
    color: yellow;
  }
}
.endCls {
  color: red;
  cursor: grabbing;
  animation: endClr 3s;
}

@keyframes endClr {
  from {
    color: white;
  }
  to {
    color: red;
  }
}
.wall {
  background-color: #ff4c29;
  cursor: grabbing;
  animation: wallColor 3s;
}

@keyframes wallColor {
  from {
    background-color: blue;
  }
  to {
    background-color: #ff4c29;
  }
}
.nodeVisited {
  background-color: yellow;
  cursor: grabbing;
  animation: isv 3s;
}

@keyframes isv {
  from {
    background-color: red;
  }
  to {
    background-color: yellow;
  }
}
.shortestPath {
  background-color: black;
  cursor: grabbing;
  animation: sp 2s;
}
@keyframes sp {
  from {
    background-color: blue;
  }
  to {
    background-color: purple;
  }
}
</style>
