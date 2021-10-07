function count(array, size) {
  var count = 0;
  for (var i = 0; i < size; i++) {
    if (array[i] > 13 && array[i] < 29) {
      count++;
    }
  }
  return count;
}
