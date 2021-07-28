<template>
  <div class="flex justify-center item-center mt-20">

   <div class="w-full ml-50 p-20">
       <div class="">
      <div
        v-for="(height, id) of baseArray"
        :key="id"
        class="array-bar mx-auto"
        :style="{ height: height + 'px', backgroundColor: this.PRIMARY_COLOR }"
      ></div>
    </div>
   </div>
    <div class="w-full flex flex-col justify-center items-center text-white">
      <button type="button " class="flex gap-2 text-pink-500 bg-transparent
      border border-solid border-pink-500 hover:bg-pink-500 hover:text-white
      active:bg-pink-600 font-bold uppercase px-8 py-3 rounded outline-none
      focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" @click="resetArray">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg><span>Reset</span>
         </button>
      <button type="button" class="flex gap-2 text-pink-500 bg-transparent
      border border-solid border-pink-500 hover:bg-pink-500 hover:text-white
      active:bg-pink-600 font-bold uppercase px-8 py-3 rounded outline-none
      focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" @click="mergeSort">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg><span>Merge Sort</span>
          </button>
      <button type="button"
              class="flex gap-2 text-pink-500 bg-transparent
      border border-solid border-pink-500 hover:bg-pink-500 hover:text-white
      active:bg-pink-600 font-bold uppercase px-8 py-3 rounded outline-none
      focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
              @click="bubbleSort">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg><span> Bubble Sort</span>


         </button>
      <button type="button" @click="insertionSort"
              class="flex gap-2 text-pink-500 bg-transparent
      border border-solid border-pink-500 hover:bg-pink-500 hover:text-white
      active:bg-pink-600 font-bold uppercase px-8 py-3 rounded outline-none
      focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
      >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg><span> Insertion Sort</span>
      </button>
      <button type="button" @click="selectionSort"
              class="flex gap-2 text-pink-500 bg-transparent
      border border-solid border-pink-500 hover:bg-pink-500 hover:text-white
      active:bg-pink-600 font-bold uppercase px-8 py-3 rounded outline-none
      focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
          </svg><span> Selection Sort</span>
      </button>
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
      noOfBars:100,
      SECONDARY_COLOR: "white",
      PRIMARY_COLOR: "rgba(236, 72, 153)",
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
  width:4px;
  display: inline-block;
  margin: 0 1px;
}
.actions {
  position: relative;
}
</style>
