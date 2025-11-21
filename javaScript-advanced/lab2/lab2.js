const num = Number(prompt("Enter number:"));
let found = false;

for (let i = 0; i <= num; i++) {
  if (i % 5 === 0) {
    console.log(i);
    found = true;
  }
}

if (!found) {
  console.log("Sorry, no numbers");
}
