// Merge sort start
export const mergeSort = (array) => {
  const animations = [];
  if (array.length <= 1) return array;
  const auxiliaryArray = array.slice();
  mergeSortHelper(array, 0, array.length - 1, auxiliaryArray, animations);
  return animations;
};
function mergeSortHelper(
  mainArray,
  startIdx,
  endIdx,
  auxiliaryArray,
  animations
) {
  if (startIdx === endIdx) return;
  const middleIdx = Math.floor((startIdx + endIdx) / 2);
  mergeSortHelper(auxiliaryArray, startIdx, middleIdx, mainArray, animations);
  mergeSortHelper(auxiliaryArray, middleIdx + 1, endIdx, mainArray, animations);
  doMerge(mainArray, startIdx, middleIdx, endIdx, auxiliaryArray, animations);
}

function doMerge(
  mainArray,
  startIdx,
  middleIdx,
  endIdx,
  auxiliaryArray,
  animations
) {
  let k = startIdx;
  let i = startIdx;
  let j = middleIdx + 1;
  while (i <= middleIdx && j <= endIdx) {
    // These are the values that we're comparing; we push them once
    // to change their color.
    animations.push([i, j]);
    // These are the values that we're comparing; we push them a second
    // time to revert their color.
    animations.push([i, j]);
    if (auxiliaryArray[i] <= auxiliaryArray[j]) {
      // We overwrite the value at index k in the original array with the
      // value at index i in the auxiliary array.
      animations.push([k, auxiliaryArray[i]]);
      mainArray[k++] = auxiliaryArray[i++];
    } else {
      // We overwrite the value at index k in the original array with the
      // value at index j in the auxiliary array.
      animations.push([k, auxiliaryArray[j]]);
      mainArray[k++] = auxiliaryArray[j++];
    }
  }
  while (i <= middleIdx) {
    // These are the values that we're comparing; we push them once
    // to change their color.
    animations.push([i, i]);
    // These are the values that we're comparing; we push them a second
    // time to revert their color.
    animations.push([i, i]);
    // We overwrite the value at index k in the original array with the
    // value at index i in the auxiliary array.
    animations.push([k, auxiliaryArray[i]]);
    mainArray[k++] = auxiliaryArray[i++];
  }
  while (j <= endIdx) {
    // These are the values that we're comparing; we push them once
    // to change their color.
    animations.push([j, j]);
    // These are the values that we're comparing; we push them a second
    // time to revert their color.
    animations.push([j, j]);
    // We overwrite the value at index k in the original array with the
    // value at index j in the auxiliary array.
    animations.push([k, auxiliaryArray[j]]);
    mainArray[k++] = auxiliaryArray[j++];
  }
}
//merge sort end

// Bubble sort start
export const bubbleSort = (array) => {
  const animations = [];
  var isSorted = false;
  var counter = 0;
  while (!isSorted) {
    isSorted = true;

    for (let i = 0; i < array.length - 1 - counter; i++) {
      animations.push([i, i + 1]);
      animations.push([i, i + 1]);
      if (array[i] > array[i + 1]) {
        swap(i, i + 1, array, animations);
        isSorted = false;
      } else {
        animations.push([i, array[i], i + 1, array[i + 1]]);
      }
    }
    counter++;
  }
  return animations;
};
function swap(i, j, array, animations) {
  const temp = array[i];
  array[i] = array[j];
  array[j] = temp;
  animations.push([i, array[i], j, array[j]]);
  // animations.push([j, array[j]]);
}
//Bubble sort end

//Quick sort start
export const quickSort = (array) => {
  const animations = [];
  quickSortHelper(array, 0, array.length - 1);

  return animations;
};
function quickSortHelper(array, startIdx, endIdx) {
  if (startIdx >= endIdx) return;
  const pivotIdx = startIdx;
  let leftIdx = startIdx + 1;
  let rightIdx = endIdx;
  while (rightIdx >= leftIdx) {
    if (array[leftIdx] > array[pivotIdx] && array[rightIdx] < array[pivotIdx]) {
      swapQuickSort(leftIdx, rightIdx, array);
    }
    if (array[leftIdx] <= array[pivotIdx]) leftIdx++;
    if (array[rightIdx] >= array[pivotIdx]) rightIdx--;
  }

  swapQuickSort(pivotIdx, rightIdx, array);
  const leftSubarrayIsSmaller =
    rightIdx - 1 - startIdx < endIdx - (rightIdx + 1);

  if (leftSubarrayIsSmaller) {
    quickSortHelper(array, rightIdx + 1, endIdx);
    quickSortHelper(array, startIdx, rightIdx - 1);
  } else {
    quickSortHelper(array, rightIdx + 1, endIdx);
    quickSortHelper(array, startIdx, rightIdx - 1);
  }
}

function swapQuickSort(i, j, array) {
  let temp = array[j];
  array[j] = array[i];
  array[i] = temp;
}
//quickSortEnd
//insertion Sort
export const insertionSort = (array) => {
  const animations = [];
  for (let i = 1; i < array.length; i++) {
    let j = i;

    while (j > 0 && array[j] < array[j - 1]) {
      animations.push([j, j - 1]);
      animations.push([j, j - 1]);
      swapInsertionSort(j, j - 1, array, animations);

      j -= 1;
    }
  }
  return animations;
};
function swapInsertionSort(i, j, array, animations) {
  const temp = array[j];
  array[j] = array[i];
  array[i] = temp;
  animations.push([i, array[i], j, array[j]]);
}

//end insertion sort
//Selection sort start
export const selectionSort = (array) => {
  const animations = [];
  let startIdx = 0;
  while (startIdx < array.length - 1) {
    let currentSmallestIdx = startIdx;

    for (let i = startIdx + 1; i < array.length; i++) {
      animations.push([currentSmallestIdx, i, false, "SECONDARY_COLOR"]);
      animations.push([currentSmallestIdx, i, false, "PRIMARY_COLOR"]);
      if (array[currentSmallestIdx] > array[i]) currentSmallestIdx = i;
    }
    swapSelectionSort(startIdx, currentSmallestIdx, array, animations);
    startIdx++;
  }
  return animations;
};

function swapSelectionSort(startIdx, currentSmallestIdx, array, animations) {
  const temp = array[currentSmallestIdx];
  array[currentSmallestIdx] = array[startIdx];
  array[startIdx] = temp;
  animations.push([
    startIdx,
    array[startIdx],
    currentSmallestIdx,
    array[currentSmallestIdx],
    true,
  ]);
}
//end selection sort
