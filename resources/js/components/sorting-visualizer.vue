<template>
  <div>
    <div class="array-container">
      <div
        v-for="(height, id) of baseArray"
        :key="id"
        class="array-bar"
        :style="{ height: height + 'px', backgroundColor: this.PRIMARY_COLOR }"
      ></div>
    </div>
    <div class="actions">
      <button type="button" @click="resetArray">Reset Array</button>
      <button type="button" @click="mergeSort">Merge Sort</button>
      <button type="button" @click="bubbleSort">Bubble Sort</button>
      <button type="button" @click="insertionSort">Insertion Sort</button>
      <button type="button" @click="selectionSort">Selection Sort</button>
    </div>
  </div>
</template>

<script>
import * as Algorithms from "./Algorithms/sortingAlgorithms";
export default {
  name: "sorting-visualizer",
  props: {},
  data() {
      return {
      renderArray: [],
      baseArray: [],
      noOfBars: 50,
      SECONDARY_COLOR: "red",
      PRIMARY_COLOR: "turquoise",
      ANIMATION_SPEED_MS: 1,
      IS_SORTING: false,
      SORTED_COLOR: "yellow",
    };
  },
  mounted() {
    this.resetArray();
  },
  methods: {
    resetArray() {
      const array = [];
      for (let i = 0; i < this.noOfBars; i++) {
        array.push(this.randomIntFromIntervals(5, 730));
      }
      this.baseArray = array;
      this.renderArray = array;
    },
    randomIntFromIntervals(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min);
    },
    mergeSort() {
      const animations = Algorithms.mergeSort(this.renderArray);

      for (let i = 0; i < animations.length; i++) {
        const arrayBars = document.getElementsByClassName("array-bar");
        const isColorChange = i % 3 !== 2;

        if (isColorChange) {
          const [barOneIdx, barTwoIdx] = animations[i];
          const barOneStyle = arrayBars[barOneIdx].style;
          const barTwoStyle = arrayBars[barTwoIdx].style;
          const color = i % 3 === 0 ? this.SECONDARY_COLOR : this.PRIMARY_COLOR;
          setTimeout(() => {
            barOneStyle.backgroundColor = color;
            barTwoStyle.backgroundColor = color;
          }, i * this.ANIMATION_SPEED_MS);
        } else {
          setTimeout(() => {
            const [barOneIdx, newHeight] = animations[i];
            const barOneStyle = arrayBars[barOneIdx].style;
            barOneStyle.height = `${newHeight}px`;
          }, i * this.ANIMATION_SPEED_MS);
        }
      }
    },
    bubbleSort() {
      const animations = Algorithms.bubbleSort(this.baseArray);
      for (let i = 0; i < animations.length; i++) {
        const arrayBars = document.getElementsByClassName("array-bar");
        const isColorChange = i % 3 !== 2;
        if (isColorChange) {
          setTimeout(() => {
            const [barOneIdx, barTwoIdx] = animations[i];
            const barOneStyle = arrayBars[barOneIdx].style;
            const barTwoStyle = arrayBars[barTwoIdx].style;
            const color =
              i % 3 === 0 ? this.SECONDARY_COLOR : this.PRIMARY_COLOR;
            barOneStyle.backgroundColor = color;
            barTwoStyle.backgroundColor = color;
          }, i * this.ANIMATION_SPEED_MS);
        } else {
          setTimeout(() => {
            const [
              barOneIdx,
              newHeightOne,
              barTwoIdx,
              newHeightTwo,
            ] = animations[i];
            const barOneStyle = arrayBars[barOneIdx].style;
            barOneStyle.height = `${newHeightOne}px`;

            const barTwoStyle = arrayBars[barTwoIdx].style;
            barTwoStyle.height = `${newHeightTwo}px`;
          }, i * this.ANIMATION_SPEED_MS);
        }
      }
    },
    insertionSort() {
      const animations = Algorithms.insertionSort(this.baseArray);
      for (let i = 0; i < animations.length; i++) {
        const arrayBars = document.getElementsByClassName("array-bar");
        const isColorChange = i % 3 !== 2;
        if (isColorChange) {
          const [barOneIdx, barTwoIdx] = animations[i];

          const barOneStyle = arrayBars[barOneIdx].style;
          const barTwoStyle = arrayBars[barTwoIdx].style;
          const color = i % 3 === 0 ? this.SECONDARY_COLOR : this.PRIMARY_COLOR;
          setTimeout(() => {
            barOneStyle.backgroundColor = color;
            barTwoStyle.backgroundColor = color;
          }, i * this.ANIMATION_SPEED_MS);
        } else {
          setTimeout(() => {
            const [
              barOneIdx,
              newHeightOne,
              barTwoIdx,
              newHeightTwo,
            ] = animations[i];
            const barOneStyle = arrayBars[barOneIdx].style;
            barOneStyle.height = `${newHeightOne}px`;
            const barTwoStyle = arrayBars[barTwoIdx].style;
            barTwoStyle.height = `${newHeightTwo}px`;
          }, i * this.ANIMATION_SPEED_MS);
        }
      }
    },
    selectionSort() {
      const animations = Algorithms.selectionSort(this.baseArray);

      for (let i = 0; i < animations.length; i++) {
        const arrayBars = document.getElementsByClassName("array-bar");
        const isColorChange = animations[i].includes(false);

        if (isColorChange) {
          const [barOneIdx, barTwoIdx] = animations[i];
          const barOneStyle = arrayBars[barOneIdx].style;
          const barTwoStyle = arrayBars[barTwoIdx].style;
          const color = animations[i].includes("SECONDARY_COLOR")
            ? this.SECONDARY_COLOR
            : this.PRIMARY_COLOR;
          setTimeout(() => {
            barOneStyle.backgroundColor = color;
            barTwoStyle.backgroundColor = color;
          }, i * this.ANIMATION_SPEED_MS);
        } else {
          setTimeout(() => {
            const [
              barOneIdx,
              newHeightOne,
              barTwoIdx,
              newHeightTwo,
            ] = animations[i];
            const barOneStyle = arrayBars[barOneIdx].style;
            barOneStyle.height = `${newHeightOne}px`;

            const barTwoStyle = arrayBars[barTwoIdx].style;
            barTwoStyle.height = `${newHeightTwo}px`;
          }, i * this.ANIMATION_SPEED_MS);
        }
      }
    },
  },
};
</script>

<style>
.array-container {
  position: absolute;
  left: 100px;
  /* top: 100px; */
}
.array-bar {
  width: 2px;
  display: inline-block;
  margin: 0 1px;
}
.actions {
  position: relative;
}
</style>
