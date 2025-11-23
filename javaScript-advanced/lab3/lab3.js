const table = document.createElement("table");
let tr;
let td;

for (let index = 0; index < 30; index++) {
  tr = document.createElement("tr");
  for (let index2 = 0; index2 < 30; index2++) {
    td = document.createElement("td");
    td.classList.add("white");
    tr.appendChild(td);
  }
  table.appendChild(tr);
}

document.body.appendChild(table);

table.addEventListener("click", (e) => {
  if (e.target.tagName === "TD") {
    e.target.classList.toggle("white");
    e.target.classList.toggle("black");
  }
});

document.body.addEventListener("click", (e) => {
  if (!table.contains(e.target)) {
    table.classList.toggle("inverted");
  }
});
