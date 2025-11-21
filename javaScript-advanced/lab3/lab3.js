const a = Number(prompt("Enter first number:"));
const b = Number(prompt("Enter second number:"));
const op = prompt("Enter operation (+, -, *, /):");

function calculate(x, y, o) {
  if (o === "+") return x + y;
  if (o === "-") return x - y;
  if (o === "*") return x * y;
  if (o === "/") return x / y;
}

console.log(calculate(a, b, op));
