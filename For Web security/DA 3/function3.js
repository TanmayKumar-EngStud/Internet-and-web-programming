// Creating function for taking partial sum of array

function sum(arr) {
  var sum = 0;
  for (var i = 0; i < arr.length; i++) {
    sum += arr[i];
  }
  return sum;
}
// Fetching Array from user in Node console in integer format
var arr = intArray(process.argv.slice(2));
Sum = sum(arr);
console.log("\n\nArray is :" + arr);
console.log("\n\nSum of Array is : " + Sum + "\n\n\n");
