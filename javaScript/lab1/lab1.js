const name = prompt("Enter your name:");
const age = Number(prompt("Enter your age:"));

if (age < 18) {
  alert("You are not allowed to visit this website");
} else if (age >= 18 && age <= 22) {
  const answer = confirm("Are you sure you want to continue?");
  if (answer) {
    alert("Welcome, " + name);
  } else {
    alert("You are not allowed to visit this website");
  }
} else {
  alert("Welcome, " + name);
}
