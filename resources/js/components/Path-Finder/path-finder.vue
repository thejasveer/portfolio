<template>
  <h1 class="text-white text-center">path finder</h1>

  <div class="mt-20">
    <div
      class="flex justify-center text-white"
      v-for="item in grid"
      :key="item.row"
    >
      <div
        class="flex border text-white"
        style="width: 3rem; height: 3rem"
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

export default {
  name: "path-finder",
  props: [],
  components: {
    Node,
  },
  data() {
    return {
      tableCol: 25,
      tableRow: 15,
      grid: [],
      startNode: { row: 8, col: 3 },
      endNode: { row: 8, col: 20 },
      mouseIsPressed: false,
      movingNodes: false,
      movingNodeType: "",
      changeNode: false,
    };
  },
  watch: {},
  computed: {},

  methods: {
    makeTable() {
      for (let row = 0; row < this.tableRow; row++) {
        const currentRow = [];
        for (let col = 0; col < this.tableCol; col++) {
          let currentNode = this.createNode(row, col);
          currentRow.push(currentNode);
        }
        this.grid.push(currentRow);
      }
    },
    createNode(row, col) {
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
    },
    getNewGridWithWallToggled(grid, values) {
      const newGrid = grid.slice();
      const node = newGrid[values.row][values.col];

      if (!this.movingNodes) {
        const newNode = {
          ...node,
          isWall: !node.isWall,
        };
        newGrid[values.row][values.col] = newNode;
      } else {
        if (this.movingNodeType == "startNode") {
          const newNode = {
            ...node,
            isStart: true,
          };
          if (this.changeNode) {
            const prvNode =
              newGrid[this.previousNode.row][this.previousNode.col];
            const prvNodeUpdate = {
              ...prvNode,
              isStart: !prvNode.isStart,
              //   isWall: false,
            };
            newGrid[this.previousNode.row][
              this.previousNode.col
            ] = prvNodeUpdate;
            this.previousNode = values;
            this.startNode = newNode;
          }
          newGrid[values.row][values.col] = newNode;
        } else {
          const newNode = {
            ...node,
            isFinish: true,
          };
          if (this.changeNode) {
            const prvNode =
              newGrid[this.previousNode.row][this.previousNode.col];
            const prvNodeUpdate = {
              ...prvNode,
              isFinish: !prvNode.isFinish,
              //   isWall:(prvNode.isWall) ?  false ,
            };
            newGrid[this.previousNode.row][
              this.previousNode.col
            ] = prvNodeUpdate;
            this.previousNode = values;
            this.endNode = newNode;
          }
          newGrid[values.row][values.col] = newNode;
        }
      }

      return newGrid;
    },
    handleMouseEnter(values) {
      if (!this.mouseIsPressed) return;
      if (this.previousNode) {
        this.changeNode = true;
      }
      const newGrid = this.getNewGridWithWallToggled(this.grid, values);
      this.grid = newGrid;
    },

    handleMouseDown(values) {
      //   debugger;
      this.mouseIsPressed = true;
      if (
        (this.startNode.row == values.row &&
          this.startNode.col == values.col) ||
        (this.endNode.row == values.row && this.endNode.col == values.col)
      ) {
        this.movingNodeType =
          this.startNode.row == values.row && this.startNode.col == values.col
            ? "startNode"
            : "endNode";

        this.movingNodes = true;
        this.previousNode = values;
      }
      const newGrid = this.getNewGridWithWallToggled(this.grid, values);
      this.grid = newGrid;
    },
    handleMouseUp(values) {
      this.mouseIsPressed = false;
      this.movingNodes = false;
      this.previousNode = null;
    },
  },
  mounted() {
    this.makeTable();
  },
  created() {},
};
</script>

<style scoped>
</style>
