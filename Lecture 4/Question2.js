function count(array, size) {
  var count = 0;
  for (var i = 0; i < size; i++) {
    if (array[i] > 13 && array[i] < 29) {
      count++;
    }
  }
  return count;
}
arr = [
  1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22,
  23, 24, 25, 26, 27, 28, 29, 30,
];
console.log(count(arr, 30));
//Counting numbers between 13 and 29
