//Sample Integration Function
function integrate(f, a, b, n) {
  var h = (b - a) / n;
  var sum = 0;
  for (var i = 0; i < n; i++) {
    sum += f(a + i * h);
  }
  return h * sum;
}

f = function (x) {
  return 2 * x * x + 3 * x - 1;
};
//Taking input from user for a,b,n in Node console
var a = Number(process.argv[2]);
var b = Number(process.argv[3]);
var n = Number(process.argv[4]);

val = integrate(f, a, b, n);
console.log("\n\nIntegration of function from ", a, " to ", b, "is :-", val);
console.log("\n\nFunction is :- 2x^2 + 3*x -1\n\n\n");
