//Implementation of Differentiation of a function
fx = function (x, a, b, c, d, e) {
  return a * x * x * x * x + b * x * x * x + c * x * x + d * x + e;
}; //f(x) = ax^4 + bx^3 + cx^2 + dx + e (polynomial)
function diff(x, a, b, c, d, e, h = 0.00001) {
  v = fx(x, a, b, c, d, e);
  deltaV = (fx(x + h, a, b, c, d, e) - v) / h;
  return deltaV;
}
// take input from user in Node console
var a = Number(process.argv[2]);
var b = Number(process.argv[3]);
var c = Number(process.argv[4]);
var d = Number(process.argv[5]);
var e = Number(process.argv[6]);
var x = Number(process.argv[7]);

val = diff(x, a, b, c, d, e);
console.log("\n\nValue is being differentiated at point:- ", x);
console.log("\n\nThe value of the derivative of \nthe function is: " + val);

console.log(
  "\nThe given \nFunction is :-",
  a,
  "x^4 +",
  b,
  "x^3 +",
  c,
  "x^2 +",
  d,
  "x +",
  e,
  "\n\n\n"
);
