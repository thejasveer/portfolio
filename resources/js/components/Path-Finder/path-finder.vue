<template>
  <h1 class="text-white text-center">Path finder</h1>
  <button @click="dijkstra()">Dijkstra</button>
  <div class="mt-20">
    <div
      class="flex justify-center text-white"
      v-for="item in grid"
      :key="item.row"
    >
      <div
        class="flex border text-white"
        style="width: 2rem; height: 2rem"
        v-for="node in item"
        :key="node.col"
      >
        <Node
          :value="node"
          :isStart="node.isStart"
          :isFinish="node.isFinish"
         
          @onMouseEnter="handleMouseEnter"
          @onMouseUp="handleMouseUp"
          @onMouseDown="handleMouseDown"
        />
      </div>
    </div>
  </div>
</template>

<script>
import util from "util";
import Node from "./node";
import * as Algortithm from "../Algorithms/PathFinderAlgo";
// import store from "../pathfinderStore";
import { reactive, inject, ref, readonly, computed, onMounted } from "vue";

export default {
  name: "path-finder",
  props: [],
  components: {
    Node,
  },
  setup: () => {
    const store = inject("pathfinderStore");

    let grid = ref([]);
    const mouseIsPressed = ref(false);
    const movingNodes = ref(false);
    const movingNodeType = ref("");
    const changeNode = ref(false);
    const previousNode = ref(null);
    const startNode = ref({ row: 8, col: 3 });
    const endNode = ref({ row: 8, col: 20 });
    let sp = ref(false);
    return {
      grid,
      store,
      sp,
      tableCol: 50,
      tableRow: 25,
      startNode,
      endNode,
      mouseIsPressed,
      movingNodes,
      movingNodeType,
      changeNode,
      makeTable,
      createNode,
      getNewGridWithWallToggled,
      handleMouseEnter,
      handleMouseDown,
      handleMouseUp,
      dijkstra,
      animateDijkstra,
    };

    function makeTable() {
      const currentGrid = [];
      for (let row = 0; row < this.tableRow; row++) {
        const currentRow = [];
        for (let col = 0; col < this.tableCol; col++) {
          let currentNode = this.createNode(row, col);
          currentRow.push(currentNode);
        }
        currentGrid.push(currentRow);
      }

      grid.value = currentGrid;
    }
    function createNode(row, col) {
      return {
        col,
        row,
        isStart: row === this.startNode.row && col === this.startNode.col,
        isFinish: row === this.endNode.row && col === this.endNode.col,
        distance: Infinity,
        isVisited: false,
        isWall: false,
        previousNode: null,
      };
    }
    function getNewGridWithWallToggled(grid, values) {
      const newGrid = grid.slice();
      const node = newGrid[values.row][values.col];

      if (!movingNodes.value) {
        const newNode = {
          ...node,
          isWall: !node.isWall,
        };
        newGrid[values.row][values.col] = newNode;
      } else {
        if (movingNodeType.value == "startNode") {
          const newNode = {
            ...node,
            isStart: true,
          };
          if (changeNode.value) {
            const prvNode =
              newGrid[previousNode.value.row][previousNode.value.col];
            const prvNodeUpdate = {
              ...prvNode,
              isStart: !prvNode.isStart,
              //   isWall: false,
            };
            newGrid[previousNode.value.row][
              previousNode.value.col
            ] = prvNodeUpdate;
            previousNode.value = values;
            startNode.value = newNode;
          }
          newGrid[values.row][values.col] = newNode;
        } else {
          const newNode = {
            ...node,
            isFinish: true,
          };
          if (changeNode.value) {
            const prvNode =
              newGrid[previousNode.value.row][previousNode.value.col];
            const prvNodeUpdate = {
              ...prvNode,
              isFinish: !prvNode.isFinish,
              //   isWall:(prvNode.isWall) ?  false ,
            };
            newGrid[previousNode.value.row][
              previousNode.value.col
            ] = prvNodeUpdate;
            previousNode.value = values;
            endNode.value = newNode;
          }
          newGrid[values.row][values.col] = newNode;
        }
      }

      return newGrid;
    }
    function handleMouseEnter(values) {
      if (!mouseIsPressed.value) return;
      if (previousNode.value) {
        changeNode.value = true;
      }
      const newGrid = getNewGridWithWallToggled(grid.value, values);
      grid.value = newGrid;
    }

    function handleMouseDown(values) {
      mouseIsPressed.value = true;

      if (
        (startNode.value.row == values.row &&
          startNode.value.col == values.col) ||
        (endNode.value.row == values.row && endNode.value.col == values.col)
      ) {
        movingNodeType.value =
          startNode.value.row == values.row && startNode.value.col == values.col
            ? "startNode"
            : "endNode";

        movingNodes.value = true;
        previousNode.value = values;
      }
      const newGrid = getNewGridWithWallToggled(grid.value, values);
      // grid = newGrid;
      grid.value = newGrid;
    }
    function handleMouseUp(values) {
      mouseIsPressed.value = false;
      movingNodes.value = false;
      previousNode.value = null;
    }
    async function dijkstra() {
      let gridCopy = copyArray(grid.value);
      const startNode = gridCopy[this.startNode.row][this.startNode.col];
      const endNode = gridCopy[this.endNode.row][this.endNode.col];
      const visitedNodes = Algortithm.dijkstra(gridCopy, startNode, endNode);
      animateDijkstra(visitedNodes);
    }
    function animateShortestPath(shortestPath) {
      for (let i = 0; i < shortestPath.length; i++) {
        setTimeout(() => {
          let id = "node_" + shortestPath[i].row + "_" + shortestPath[i].col;
          document.getElementById(id).classList.add("shortestPath");
        }, 100 * i);
      }
    }

    function copyArray(o) {
      {
        var output, v, key;
        output = Array.isArray(o) ? [] : {};
        for (key in o) {
          v = o[key];
          output[key] = typeof v === "object" ? copyArray(v) : v;
        }
        return output;
      }
    }

    function animateDijkstra(visitedNodesInOrder) {
      for (let i = 0; i < visitedNodesInOrder.length; i++) {
        setTimeout(() => {
          const node = visitedNodesInOrder[i];
          const newGrid = grid.value;
          const newNode = {
            ...node,
            isVisited: true,
          };
          newGrid[node.row][node.col] = newNode;
          grid.value = newGrid;
        }, 100 * i);

        let j = visitedNodesInOrder.length - 1;
        if (i == j && visitedNodesInOrder[i].isFinish == true) {
          setTimeout(() => {
            let shortestPath = Algortithm.getNodesInShortestPathOrder(
              visitedNodesInOrder[i]
            );
            animateShortestPath(shortestPath);
          }, 100 * i);
          // sp = true;
        }
      }
    }
  },

  watch: {},
  computed: {},

  methods: {},
  mounted() {},
  created() {
    this.makeTable();
  },
};
</script>

<style scoped></style>
